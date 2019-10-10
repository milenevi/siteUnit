<?php 
    require "header.php";
    $latitude = -3.716816;
    $longitude = -38.519115;
    $descricao = 'Centro de Fortaleza';
    $_SUA_CHAVE_API_ = 'AIzaSyCHbHUiC05PkgiiWPgaKoygYmYqb_rC1R4&callback';
?>
    <body>
        <!-- Div para o mapa -->
    	<div id="map"></div>

        <!-- Código para renderizar o mapa -->
		<script src="js/maps.js" async defer></script>

		<!-- Maps API Javascript para que funcione o mapa -->
        <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCHbHUiC05PkgiiWPgaKoygYmYqb_rC1R4&callback=initMap" async defer> -->
        <script type="text/javascript" src="//maps.google.com/maps/api/js?key= <?php echo $$_SUA_CHAVE_API_;?>  =initMap"></script>
        </script>

        <script type="text/javascript">
            var map;
            var latitude = "<?php echo $latitude;?>"        
            var longitude = "<?php echo $longitude;?>"

            function initMap(){
                var mapOptions = {
                    center: {lat: "<?php echo $latitude;?>" , lng: "<?php echo $longitude;?>"},
                    zoom: 8
                };

                map = new google.maps.Map(document.getElementById('map'), mapOptions);

                //marcador
                const marker = new google.maps.Marker({
                    position: {lat: "<?php echo $latitude;?>" , lng: "<?php echo $longitude;?>"},
                    map: map,
                    title: "<?php echo $descricao;?>",
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

        //    var mensagem = "<?php echo $latitude;?>";
        //    alert(mensagem);
         </script>
        
        <h1> Título </h1>
        
    </body>
</html>