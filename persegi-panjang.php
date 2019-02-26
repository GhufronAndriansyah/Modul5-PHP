<?php
	if(isset($_POST['submit'])){
		$massa = $_POST['m'];
        $volume = $_POST['v'];
		function Massa($massa,$volume){
			return $massa/$volume;
		}
        echo "Benda yang memiliki massa: $massa, dan volume : $volume, maka : <br>";
        echo "Rumus dari Massa Jenis Benda Adalah : Massa / Volume <br>";
		echo "Jadi : $massa (Massa) / $volume(Volume) <br>";
		echo "Jadi Hasilnya adalah : ";
		echo Massa($massa,$volume);
		echo "<br>";
	}
?>
	<a href="MassaJenis.php"><button type="button">Kembali</button></a>