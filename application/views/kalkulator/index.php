<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<h1>Kalkulator</h1>
	<form action="<?php base_url();?>index.php/Kalkulator" method="POST">
		<input type="text" name="angka1"> <br><br>
		<input type="text" name="angka2"> <br><br>
		<select name="pilih_oprasi">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="submit" value="Hitung">
	</form>
</body>
</html>