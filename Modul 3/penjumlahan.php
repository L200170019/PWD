<html>
	<head>
		<title>penjumlahan</title>
	</head>
	<body>
		<form method="POST" action="">
			<p>Nilai A Adalah <input type="text" name="A" size="3"></p>
			<p>Nilai B Adalah <input type="text" name="B" size="3"></p>
			<p><input type="submit" name="submit" value="Jumlahkan"></p>
		</form>
		<?php
			error_reporting(E_ALL ^ E_NOTICE);
			$A = $_POST['A'];
			$B = $_POST['B'];
			$submit = $_POST['submit'];

			if($submit){
				$jum = $A+$B;
				echo "Nilai A adalah $A</br>Nilai B adalah $B</br> jadi nilai A ditambah Nilai B adalah $jum";
			}
		?>

	</body>
</html>