<?php
    if(isset($_POST['submit'])){
		$gaya = $_POST['g'];
        $jarak = $_POST['j'];
        function Usaha($b1,$b2){
			return $b1*$b2;
		}
        echo "Suatu Usaha yang memiliki gaya: $gaya, dan jarak : $jarak, maka : <br>";
        echo "Rumus dari Usaha Adalah : gaya x usaha <br>";
        echo "Jadi : $gaya (Gaya) x $jarak(Jarak) <br>";
        echo "Jadi Usaha Adalah: ";
        echo Usaha($gaya, $jarak);
        echo "<br>";
    }
?>
<a href="Usaha.php"><button type="button">Kembali</button></a>