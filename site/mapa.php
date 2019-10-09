<?php
  require "header.php";
?>
<html>
<body>

<div class="map" id="map">
  <div id="googlemap" >
    <div class="gm-style">        
    </div>
  </div>
</div>

<div><div class="background"></div><div class="swipe"><ul id="slider"></ul></div></div>

<nav class="navigation">
  <a href="javascript: void(0)" class="logo left"></a>
  <a href="index.php" target="_blank" class="contact right">Cadastrar ponto</a>
</nav>

<div class="bar">
  <div class="filter">
    <select>
        <option value="Florianópolis" geo="-27.592763, -48.547049" zoom="11">Florianópolis</option>
        <option value="Joinville" geo="-26.2720962,-48.8916483" zoom="11">Joinville</option>
        <option value="Blumenau" geo="-26.8892794,-49.0920441" zoom="11">Blumenau</option>
        <option value="Criciúma" geo="-28.6765419,-49.3737742" zoom="11">Criciúma</option>
    </select>

    <select>
    <option value="">Todas</option>
    <option value="Marketing">Marketing</option>
    <option value="Tecnologia">Tecnologia</option>
    <option value="Vendas">Vendas</option>
    <option value="Suporte/Atendimento">Suporte/Atendimento</option>
    <option value="Financeiro">Financeiro</option>
    <option value="Pessoas">Pessoas</option>
    <option value="Design">Design</option>
    <option value="Administração">Administração</option>
    <option value="Projetos">Projetos</option>
    <option value="null"></option>
    <option value="#REF!">#REF!</option>
    </select>

    <div class="companies" id="companies">
      <ul>
        <li>
        <div index="0">
          <img src="https://media.licdn.com/dms/image/C4E0BAQFpyaAyeIgdkg/company-logo_400_400/0?e=1577318400&amp;v=beta&amp;t=iBLYKCbZWAjbOwzr7nHtmnsIqFskt2fH-NQni2md0Lc">
          <h2>1Doc</h2>
          <h3>1 vagas</h3>
        </div>
        </li>
      </ul>
    </div>
  </div>
</div>
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-3.71681600, -38.51911500),
          zoom: 8
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
            
            var xml = data.responseXML;            
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var id = markerElem.getAttribute('idreciclagem');
             
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');             
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHbHUiC05PkgiiWPgaKoygYmYqb_rC1R4&callback=initMap">        
    </script>
  </body>
</html>