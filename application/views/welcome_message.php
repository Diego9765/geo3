<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> GeoReferenciacion</title>

    <!-- Importacion jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <!-- importacion de Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- importacion api de google maps  y colocar la clave que obtuvimos-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9JGGGakvZ_PZx-L3m-TlQfEbaxuEhATs&libraries=places&callback=initMap" >
</script>

  </head>
  <body>

        <br>
				<center>
					<h1><b>GEOREFERENCIACION</b></h1>
				</center>
        <div id="mapa1" style="height:500px; width:100%; border:2px solid black;">
        </div>
    <script type="text/javascript">
    function initMap(){
      alert("API IMPORTADO EXITOSAMENTE");
      //DDEFINIENDO COORDENADAS
			var coordenadasn=new google.maps.LatLng(14.701269665222826, -17.479665076944727);
      var coordenadasn2=new google.maps.LatLng(15.474612227801856, -16.667441041029107);
			var coordenadasn3=new google.maps.LatLng(16.597647113987794, -16.23871231075203);
			var coordenadasn4=new google.maps.LatLng(16.57569111004241, -16.124430391901964);
			var coordenadasn5=new google.maps.LatLng(16.575592216595073, -15.461927584325327);
			var coordenadasn6=new google.maps.LatLng(16.640243336731658, -14.48273361454963);
			var coordenadasn7=new google.maps.LatLng(14.701269665222826, -17.479665076944727);
			var coordenadasn8=new google.maps.LatLng(15.564117273588131, -16.74081510881355);
			var coordenadasn9=new google.maps.LatLng(16.538914359635793, -16.33905224800247);
			var coordenadasn10=new google.maps.LatLng(16.564583054430674, -15.304837321749558);
			var coordenadasn11=new google.maps.LatLng(14.701269665222826, -17.479665076944727);
			var coordenadasn12=new google.maps.LatLng(16.072727018628605, -13.441552830296782);
			var coordenadasn13=new google.maps.LatLng(15.238397571419206, -12.80602733414455);
			var coordenadasn14=new google.maps.LatLng(13.814146106374292, -11.959294039751823);
	
			var poligono=[
				coordenadasn,
				coordenadasn2,
				coordenadasn3,
				coordenadasn4,
				coordenadasn5,
				coordenadasn6,
				coordenadasn7,
				coordenadasn8,
				coordenadasn9,
				coordenadasn10,
				coordenadasn11,
				coordenadasn12,
				coordenadasn13,
				coordenadasn14
			];

      //CREACION DE MAPA
      var mapa=new google.maps.Map(
        document.getElementById('mapa1'),
        {
          center:{lat:-3.096337110347073, lng:-67.94391596707631},zoom:2,mapTypeId:"terrain"
        }
      );
      var marcadorsn=new google.maps.Marker({
        position:coordenadasn,
        map:mapa,
        title:"Senegal"

      });
			var marcadorbz=new google.maps.Marker({
        position:coordenadasn2,
        map:mapa,
        title:"Senegal"

      });
			var marcadorpe=new google.maps.Marker({
        position:coordenadasn3,
        map:mapa,
        title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn4,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn5,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn6,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn7,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn8,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn9,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn10,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn11,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn12,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn13,
				map:mapa,
				title:"senegal"
			});
			var marcadorpe=new google.maps.Marker({
				position:coordenadasn14,
				map:mapa,
				title:"senegal"
			});
		var poligono=new google.maps.Polygon({
			paths:poligono,
			strokeColor:"#F2F622",
			strokeOpacity:"0.5",
			strokeWeight:5,
			fillColor:"#9A227F",
			fillOpacity:"0.3"
		});
		poligono.setMap(mapa);
	}
</script>
  </body>
</html>
