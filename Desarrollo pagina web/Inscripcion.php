<?php include('header.php');?>
<h2>Solicitud de inscripcion:</h2>


  <?php include('aside.php');?>

<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <b>Nombre:</b>
    <input type="text" name="nombre" maxlength="50"><br><br>
    <b>Documento:</b>
    <input type="number" name="Documento"><br><br>
    <b>Telefono:</b>
    <input type="number" name="Telefono"><br><br>
    <b>Email:</b>
    <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Enviar">
</form></center>

<?php include('footer.php');?>
</body>
</html>
