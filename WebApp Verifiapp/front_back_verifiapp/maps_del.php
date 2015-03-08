<?php
include("conex.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  	<link rel="stylesheet" type="text/css" href="style_map.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <style>
		#search{
		position: absolute;
		right: 5%;
		bottom: 5%;
		height: 100px;
		width: 100px;
		}
	</style>
    <script type="text/javascript">
    function initialize() {
      var marcadores = [

      	<?php
      	$delega=$_GET['del']; //obtengo la variable que paso por archivo de delegaciones.html
        $conexion = mysqli_connect("$ruta","$user","$pass","$db");//realizo la conexion a la DB (consultar conex.php para saber los valores de las variables) 

        $result = mysqli_query($conexion,"SELECT * FROM `TABLE 1` WHERE delegacion='$delega'");
                
                                        while($row = mysqli_fetch_array($result)){ 
                                        		if($row['num_autos'] >= 0 || $row['num_autos'] < 6){//verifico los valores de num_autos para pintarlo de colores y resentarlo en el map
                                        					$color = "#1b5e20";//color verde
                                        	}else if($row['num_autos'] >= 6 || $row['num_autos'] < 12){
                                        					$color = "#ffc107";//color amarillo
                                        	}else if($row['num_autos'] > 12){
                                        					$color = "#d50000";//color rojo
                                        	}?>                                        	

        ["<?php echo $row['razon_social']?><br><?php echo $row['direccion']?><br>Telefono(s): <?php echo $row['telefonos']?>
        <br><b><span style=\"#ffc107\">Numero de Autos en Verificentro: <?php echo $row['num_autos']?></span><b>", <?php echo $row['latitud'] ?>, <?php echo $row['longitud'] ?>], <?php } ?>
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 12,
        center: new google.maps.LatLng(19.4210164,-99.124715),//centro coordenada en distrito
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({ 
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),//itero en la base de datos para generar los makers
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function busqueda(){
    		location.href="delegaciones.html";
    }


    </script>
  </head>
  <body fullbleed unresolved>
    <div class="map" id="mapa"> </div><!--visualizo el mapa -->
    <img id="search" src="search.png" onclick="busqueda()"/>
    
  </body>
</html>