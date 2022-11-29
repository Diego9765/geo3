<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Geo Localizacion</title>


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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaTJU2cwimWMptoieWgkUuwTYuUqRo0OY&libraries=places&callback=initMap" ></script>

  </head>
  <body>
    <div class="well"><!--permite hacer un cuadro en el titulo -->
      <h1 class="text-center"><i class="glyphicon glyphicon-map-marker"></i><b>GEO LOCALIZACION DINAMICA</b></h1>
      <h5 class="text-center">DESARROLLADO POR: Javier Lasso</h5>
    </div>
    <br>

    <div class="container-fluid">
      <form class="form-horizontal"
      action="<?php echo site_url('clientes/guardar'); ?>"
      method="post">
        <div class="row">
            <div class="col-md-4">
              <b>APELLIDOS:</b><br>
              <input type="text" required name="apellido_cli"
              class="form-control" placeholder="Ingrese los apellidos" value="">
            </div>
            <div class="col-md-4">
              <b>NOMBRES:</b><br>
              <input type="text" required name="nombre_cli"
              class="form-control" placeholder="Ingrese los nombres" value="">
            </div>
            <div class="col-md-4">
              <b>EDAD:</b><br>
              <input type="number" required name="edad_cli"
              class="form-control" placeholder="Ingrese la edad" value="">
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-md-4">
              <b>GÉNERO:</b>
              <select class="form-control" name="genero_cli" required>
                  <option value="">--Seleccione una opción--</option>
                  <option value="MUJER">Mujer</option>
                  <option value="HOMBRE">Hombre</option>
              </select>
            </div>
            <div class="col-md-4">
              <b>LATITUD:</b><br>
              <input type="text" required name="latitud_cli"
              class="form-control" placeholder="Ingrese la latitud" value="" id="latitud_cli" readonly>
            </div>
            <div class="col-md-4">
              <b>LONGITUD:</b><br>
              <input type="text" required name="longitud_cli"
              class="form-control" placeholder="Ingrese la latitud" value="" id="longitud_cli" readonly>
            </div>
        </div>

        <br><br>
        <div class="row">
          <div class="col-md-4 text-center">
              <button type="submit" class="btn btn-primary">
                &nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;
              </button>
              &nbsp;&nbsp;&nbsp;
              <button type="reset" class="btn btn-danger">
                &nbsp;&nbsp;&nbsp;Cancelar&nbsp;&nbsp;&nbsp;
              </button>
          </div>
        </div>

      </form>
    </div>





    <div class="row">
      <div class="col-md-6">
        <br>

        <div id="mapa1" style="height:300px; width:100%; border:2px solid black;">
        </div>
      </div>

    </div>


<div class="row">
      <div class="col-md-6 text-center">

        <br><br>
        <legend>Listado de Datos</legend>
        <table class="table table-border table-striped table-hover">
          <!-- striped hace que aparezaca como sebra y hover cuando se pasa el cursor aparece una sombra -->
          <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">NOMBRE</th>
              <th class="text-center">APELLIDO</th>
              <th class="text-center">EDAD</th>
              <th class="text-center">GENERO</th>
              <th class="text-center">LATITUD</th>
              <th class="text-center">LONGITUD</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($listadoClientes): ?> <!--listado de clientes del controlador -->
              <?php foreach ($listadoClientes->result() as $clienteTemporal): ?>
                <tr>
                  <td class="text-center"><?php echo $clienteTemporal->id_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->nombre_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->apellido_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->edad_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->genero_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->latitud_cli; ?></td>
                  <td class="text-center"><?php echo $clienteTemporal->longitud_cli; ?></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>


      <script type="text/javascript">
      function initMap(){
        alert("API IMPORTADO EXITOSAMENTE");
        //DDEFINIENDO COORDENADAS
        var latitud_longitud=new google.maps.LatLng(0,0);
        //CREACION DE MAPA
        var mapa=new google.maps.Map(
          document.getElementById('mapa1'),
          {
            center:latitud_longitud,
            zoom:3,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          }
        );
        //CREACION DE MARCADORES
        var marcador=new google.maps.Marker({
          position:latitud_longitud,
          map:mapa,
          title:"Seleccine la direccion",
          draggable:true
        });

        google.maps.event.addListener(
          marcador,
          'dragend',
          function (event){
            var latitud= this.getPosition().lat();
            var longitud=this.getPosition().lng();
            document.getElementById('latitud_cli').value=latitud;
            document.getElementById('longitud_cli').value=longitud;
          }
        );




      }
  </script>

  </body>
</html>
