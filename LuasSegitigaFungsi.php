<html>
	<head>
		<title>luas segitiga</title>
	</head>
		<body>
			<table>
				<form action="" method="post" name="luassegitiga">
				<tr><td>Masukkan Alas</td><td><input type="text" name="alas"></td></tr>
				<tr><td>Masukkan Tinggi</td><td><input type="text" name="tinggi"></td></tr>
				<tr><td><input type="submit"name="input"value="Hitung"></td></tr>
				</form>
			</table>
		</body>
</html>

<?php
	
		if(isset($_POST['input'])){
		$alas=$_POST['alas'];
		$tinggi=$_POST['tinggi'];
		
		
		function luas($a,$t){
			$ls=0.5*$a*$t;
			echo "Luas Segitiga = 0.5*$a*$t = $ls";
			return $ls;
		}
		
		luas($alas,$tinggi);
		
		}
?>