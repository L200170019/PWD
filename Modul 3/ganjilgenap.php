<html>
	<head>
		<title>ganjil genap</title>
	</head>
	<body>
		<form method="POST" action="">
			<p>Masukkan Bilangan <input type="text" name="A" size="3"></p>
			<p><input type="submit" name="submit" value="tentukan"></p>
		</form>
		<?php
			error_reporting(E_ALL ^ E_NOTICE);
			$A = $_POST['A'];
			$submit = $_POST['submit'];

			if($submit){
				if($A % 2 == 0){
					echo "Jadi Nilai dari $A</br> Merupakan bilangan Genap";
				}else{
					echo "Jadi Nilai dari $A</br> Merupakan bilangan Ganjil";
				}
					
			}
		?>

	</body>
</html>
