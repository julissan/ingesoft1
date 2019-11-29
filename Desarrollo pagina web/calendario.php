<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1><center>Calendario</center></h1>
			</div>


			<div class="articulo">
				<article>
				<p>

					<?php include('calendario2.php');?></br>
					<center><h2>Eventos Proximos</h2></center></br>
					<?php
							$host="localhost";
							$port=3306;
							$socket="";
							$user="root";
							$password="admin";
							$dbname="Semillero";

							$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
							 or die ('Could not connect to the database server' . mysqli_connect_error());

							$sql = "SELECT Evento.titulo as 'Titulo' , Evento.Texto as 'Descripcion' , Evento.Fecha as 'Fecha' , Evento.Imagen as 'img' FROM Evento;";

					$result = $con->query($sql);
					if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							$res= "img/" . $row['img'] . ".jpg";
		 					echo "<img src=$res >". "<br>". "<br>";
							echo $row['Titulo'] ."<br>".$row['Descripcion'] ."<br>" ."Fecha" .": ".$row['Fecha'] ."<br>"."<br>";


							}
					} else {
								 echo "0 results";
					}
					$con->close();

						?>

					</p>
				</article>
			</div>
			<?php include('aside.php');?>
		</div>
	</section>

<?php include('footer.php'); ?>
</body>
</html>
