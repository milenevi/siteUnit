<?php 
    require "header.php";

    //trazer os valores do banco
    $reciclagem = new Reciclagem();
    $reciclagem =  $reciclagem->buscar_todos();

?>
    <body>
        <!-- Div para o mapa -->
    	<div id="map"></div>

		<!-- Maps API Javascript para que funcione o mapa -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCHbHUiC05PkgiiWPgaKoygYmYqb_rC1R4&callback=initMap" async defer>

        </script>


        <script type="text/javascript">
           


            
var map;
            
            //só está printando o ultimo marcador cadastrado
            function initMap(){
                <?php

                    foreach ($reciclagem as $key => $value):
           
                ?>
            
                //pegar as informações do banco e colocar na variavel JS
            var latitude = "<?php echo $value['latitude'];?>";            
            var longitude = "<?php echo $value['longitude'];?>";
            var descricao = "<?php echo $value['nome_rua'];?>";


                console.log(latitude);

                map = new google.maps.Map(document.getElementById('map'), 8);

                //marcador
                const marker = new google.maps.Marker({
                    position: {lat: parseFloat(latitude) , lng: parseFloat(longitude)},
                    map: map,
                    title: descricao,
                    //icon: 'imagem/pino.jpg',
                    animation: google.maps.Animation.DROP,
                    draggable: true,
                });

<?php        
    endforeach;
?>                            
            }

         </script>


       <!--  <h1> Título </h1> -->
        
    </body>
</html>