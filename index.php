<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos!</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
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

								$sql = "SELECT Publicacion.Titulo as 'Titulo' , Publicacion.Texto as 'Descripcion' FROM Publicacion;";

						$result = $con->query($sql);
						if ($result->num_rows > 0) {
								// output data of each row
							 	while($row = $result->fetch_assoc()) {
								echo $row['Titulo'] .":".$row['Descripcion'] ."<br>";
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
