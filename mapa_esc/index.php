<?php
  require "header.php";  
  require "menu.php";
  require "config.php";


  $_SUA_CHAVE_API_GERAL = new Chave();
  $_SUA_CHAVE_API_GERAL =  $_SUA_CHAVE_API_GERAL->buscar_todos();  

?>
<link id="scrollUpTheme" rel="stylesheet" href="css/themes/tab.css">
<script src="assets/js/jquery.scrollUp.min"></script>
  <!-- importações js -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.js"></script>  
  
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  <!-- Main Header ficava aqui o que está no arquivo perfil-->
<?php
  require "perfil.php";
?>
  <!-- Left side column. contains the logo and sidebar ficaria aqui o menu, mas retirei-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
    <div class="container">      
      
         
      <!-- Mapa -->
    <div class="map" id="map">
    

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

    <?php
        foreach ($_SUA_CHAVE_API_GERAL as $key => $_SUA_CHAVE_API_):
    ?>
    <script async defer      
     src="https://maps.google.com/maps/api/js?key=<?php echo $_SUA_CHAVE_API_['id_chave_maps'] ;?>=initMap">
    </script>    
    <?php    
        endforeach
    ?>
    
    </div>
</div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->


<script src="bootstrap2/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>

</body>
</html>
