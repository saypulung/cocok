<form action="" method="post">
	<input type="text" name="waktu"/>&nbsp;<input type="text" name="menit"/>&nbsp;<button type="submit" name="hitung">Hitung</button>
</form>
<?php
	function hitung_waktu($jam,$jumlah_menit){
		$time = strtotime($jam);
		$waktu_selesai = date('H:i:s',strtotime("+$jumlah_menit minutes",$time));
		return $waktu_selesai;
	}
	if(isset($_POST['hitung'])){
		$waktu = $_POST['waktu'];
		$menit = $_POST['menit'];
		echo hitung_waktu($waktu,$menit);

	}
?>
<form action="" method="post">
	<input type="text" name="c1"/>&nbsp;<input type="text" name="c2"/>&nbsp;<button type="submit" name="hitung2">Hitung</button>
</form>
<?php
	function ceil2($time,$min){
		$a = $time/$min;
		$b = ceil($a);
		return $b;
	}
	if(isset($_POST['hitung2'])){
		$waktu = $_POST['c1'];
		$menit = $_POST['c2'];
		echo ceil2($waktu,$menit);

	}
?>