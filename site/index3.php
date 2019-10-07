<?php 
    require "header.php";
    $latitude = -3.716816;
    $longitude = -38.519115;
    $descricao = 'Centro de Fortaleza';
?>
    <body>
        <!-- Div para o mapa -->
    	<div id="map"></div>

        <!-- Código para renderizar o mapa -->
		<!-- <script src="js/map.js"></script> -->

		<!-- Maps API Javascript para que funcione o mapa -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCHbHUiC05PkgiiWPgaKoygYmYqb_rC1R4&callback=initMap" async defer>

        </script>

        <script type="text/javascript">
            var map;
            var latitude = "<?php echo $latitude;?>";        
            var longitude = "<?php echo $longitude;?>";
            var descricao = "<?php echo $descricao;?>";
            
            console.log(latitude);
            
            function initMap(){
                var mapOptions = {
                    center: {lat: parseFloat(latitude) , lng: parseFloat(longitude)},
                    zoom: 8
                };

                map = new google.maps.Map(document.getElementById('map'), mapOptions);

                //marcador
                const marker = new google.maps.Marker({
                    position: {lat: parseFloat(latitude) , lng: parseFloat(longitude)},
                    map: map,
                    title: descricao,
                    //icon: 'imagem/pino.jpg',
                    animation: google.maps.Animation.DROP,
                    draggable: true,
                });

                let infoWindow = new google.maps.InfoWindow({
                    content: '<h2> Informação do marcador </h2>'
                    //position: 100px, 
                    //maxWidth: 200px
                });

                //evento de click para quando clicar no marcador abrir o infoWindow
                marker.addListener('click', () => {
                    infoWindow.open(map, marker);
                });

                //evento para quando clicar adicionar um marcador
                map.addListener('click', function(e) {
                    var clickPosition = e.latLng;//pegar a posição do mapa
                    new google.maps.Marker({
                        position: clickPosition, //posição que ele clicou no mapa
                        map: map,
                        //title: 'Centro de Fortaleza',
                        //icon: 'imagem/pino.jpg',
                        animation: google.maps.Animation.DROP,
                        draggable: true,
                    });
                    console.log(e.latLng);
                }); 
                            
            }

         </script>
        
        <h1> Título </h1>
        
    </body>
</html>