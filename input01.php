<!DOCTYPE html>
<html>
<head><title>Pengolahan Form</title></head>
<body>
<form action ="" method="POST" name="input">Nama anda : <input type="text" name="nama"><br>
<input type="submit" name="input" value="input">
</form>
</body>
</html>

<?php
if(isset($_POST['input'])){
	$nama = $_POST['nama'];
	echo "Nama Anda : <b>$nama</b>";
}
?>
