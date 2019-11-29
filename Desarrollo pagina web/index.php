<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1><center>SEMILLERO EN INVESTIGACIÓN DE RADIO-PROPAGACIÓN Y TELECOMUNICACIONES</center></h1>
			</div>
			<div class="mensaje">
				<h1><center>Ultimas Noticias</center></h1>
			</div>


			<div class="articulo">
				<article>
				<p>
						<?php
								$host="localhost";
								$port=3306;
								$socket="";
								$user="root";
								$password="admin";
								$dbname="Semillero";

								$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
								 or die ('Could not connect to the database server' . mysqli_connect_error());

								$sql = "SELECT Noticia.Titulo as 'Titulo' , Noticia.Texto as 'Descripcion' , Noticia.Imagen as 'img' FROM Noticia;";

						$result = $con->query($sql);
						if ($result->num_rows > 0) {
								// output data of each row
							 	while($row = $result->fetch_assoc()) {
								echo $row['Titulo'] .":".$row['Descripcion'] ."<br>";

								$res= "img/" . $row['img'] . ".jpg";
	              echo "<img src=$res >". "<br>". "<br>";
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
