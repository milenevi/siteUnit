var map;
function initMap(){
	var mapOptions = {
		center: {lat: -3.716816, lng: -38.519115},
		zoom: 8
	};

	map = new google.maps.Map(document.getElementById('map'), mapOptions);

	//marcador
	const marker = new google.maps.Marker({
		position: {lat: -3.716816, lng: -38.519115},
		map: map,
		title: 'Centro de Fortaleza',
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