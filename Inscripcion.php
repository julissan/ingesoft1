<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">

			<div class="articulo">
				<article>
					<p><?php
              $host="localhost";
              $port=3306;
              $socket="";
              $user="root";
              $password="admin";
              $dbname="Semillero";

              if (!$_POST){
                ?>
                <form method="post" action="Inscripcion.php" >
                  Nombre: <input type="text" name='Nombre' >
                  <br>
                  <br>
                  Documento: <input type= "text" name= 'Documento' >
                  <br>
                  <br>
                  Telefono: <input type= "text" name='Telefono'>
                  <br>
                  <br>
                  Correo: <input type= "text" name ='Correo' >
                  <br>
                  <br>
                  <input type="submit" value="Enviar">
                </form>
              }
    //        <?php
  //          } else{
//              $ssql= "INSERT INTO Solicitud(IdSolicitud, Nombre, Documento, Teléfono, Correo)"


            //}

              ?></p>
					<br/>

				</article>
			</div>

		<?php include('aside.php');?>
		</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html>
