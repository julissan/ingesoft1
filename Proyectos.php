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

              $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
               or die ('Could not connect to the database server' . mysqli_connect_error());

              $sql = "SELECT Proyecto.titulo as 'Titulo' , Proyecto.Texto as 'Descripcion' , Proyecto.Estado as 'Estado' FROM Proyecto;";

          $result = $con->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              echo $row['Titulo'] .":".$row['Descripcion'] .":".$row['Estado'] ."<br>";
              }
          } else {
                 echo "0 results";
          }
          $con->close();

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
