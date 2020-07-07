<?php 

error_reporting(0);
$get = $_GET;
$resultTracking = array();

if (isset($get['TrackingName'])) {

	$nameList = array();

	$nameList = [
		'name' => '01234',
		'name1' => 'xxxxxxxxxxxx',
		'name2' => '012346789',
	];


	foreach ($nameList as $keyName => $valueTracking) {

		if (strpos($keyName, $get['TrackingName']) !== false) {
			$resultTracking[$keyName] = $valueTracking;
		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kaning Mask Fanart Tracking</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<body>

<form action="tracking.php" method="GET">
	<label>ค้นหาชื่อ</label>
	<input type="text" name="TrackingName" value="<?= $get['TrackingName'] ?>">
	<input type="submit" value="ค้นหา">

</form>

<?php if (count($_GET) > 0): ?>
	
	<div id="result">
		
		<?php 

			if (count($resultTracking) > 0) {
				echo "________________________________________________<br><br>";
				foreach ($resultTracking as $keyName => $valueTracking) {
					
					echo "ชื่อ : ".$keyName."<br>"."Tracking : ".$valueTracking;
					echo "<br>________________________________________________<br><br>";
				}

			} else {
				echo "ไม่พบข้อมูล กรุณาติดต่อทางเพจ";
			}
		?>

	</div>

<?php endif ?>


</body>
</html>