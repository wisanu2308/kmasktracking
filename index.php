<?php 

error_reporting(0);

function utf8_strlen($s) {
    
	$c = strlen($s); 
	$l = 0;
	for ($i = 0; $i < $c; ++$i) {
		if ((ord($s[$i]) & 0xC0) !== 0x80) {
			$l++;
		}
	}
	return $l;

}

$get = $_POST;
$resultTracking = array();

if (isset($get['TrackingName'])) {

	$nameList = array();

	$nameList = [
		'test' => 'ฮั่นแน่~~',
		'แอ ด กัส' => 'โดนพี่ฟอร์ตกแล้วนะ',
		'แอ ด เพียง' => 'พี่สาวที่รักของคนิ้ง',
		'นายอัษฎา_เบิกไพร' => 'RX173483593',
		'พิชญุตม์_ธงศิริ' => 'RX173483942',
		'ชยุตพงศ์_ชุมนวน' => 'RX173483721',
		'ธนกฤต_ธนามี' => 'RX173483749',
		'กิตติศักดิ์_สายคำยศ' => 'RX173484041',
		'นายนราธิป_ปัญญาอินทร์' => 'RX173484055',
		'ลลิตา_รัตนรุ่งศรี' => 'RX173483647',
		'ปฏิภาณ_หลวงเทพ' => 'RX173483987',
		'ณฐวัฒน์​_คำนนท์ใส' => 'RX173484024',
		'ลลิตนภัส_ปะสะสุข' => 'RX173483718',
		'นายทรงพล_ทันจันทึก' => 'RX173483939',
		'เจษฎา_เขียวเพชร' => 'RX173483845',
		'นายอนุวัฒน์_ลอคำ' => 'RX173483735',
		'นายฐิติ_จันทร์ศิริยานันท์' => 'RX173483956',
		'วรวุฒิ_ศรีลัดดา' => 'RX173484072',
		'ปนพ_ใจกว้าง' => 'RX173483854',
		'กันตชาติ_ญาณสูตร' => 'RX173483559',
		'ชนาธิป_อิสรารุ่งเรือง' => 'RX173483655',
		'นายสุภาณุพัฒน์_ทีบุตร' => 'RX173483973',
		'สราวุธ_พิชนนาค' => 'RX173483531',
		'ชลิต_สุกิจรัตนาภรณ์' => 'RX173483528',
		'Jimmy_Derbra-ern' => 'RX173483823',
		'ณัฐภัทร_เนินงาม' => 'RX173483995',
		'นายภัคพงศ์_คำกุล' => 'RX173483908',
		'ชัญญา_สุรทานนท์' => 'RX173483925',
		'สมเกียรติ​_กันทาผาม' => 'RX173484015',
		'บุญฤทธิ์_ลอยมั่นคง' => 'RX173484007',
		'รัชศักดิ์_นนทะวงศ์' => 'RX173483885',
		'ธนันต์_พีระพัฒนพงษ์' => 'RX173483704',
		'ณัฐชนน​_แสงแก้ว' => 'RX173484069',
		'ชวนันท์_ชนไมตรี' => 'RX173483580',
		'เกริกพล_ถาวรกังวาฬ' => 'RX173483810',
		'ศักดิ์ดา_แก่นสาร' => 'RX173483562',
		'siriwat_paknapa_' => 'RX173483783',
		'นายอุกฤษณ์_คราวจันทึก' => 'RX173483871',
		'กานต์_กุฏอินทร์' => 'RX173484038',
		'นายจตุพร_คณารศ' => 'RX173483868',
		'นาย_สุวพล_หอมจันทร์' => 'RX173483681',
		'สุทธิภัทร_คำเรียบ' => 'RX173483899',
		'Surachai.je' => 'RX173484090',
		'ภาพิมล_เล้าทักษ์ศิริโชติ' => 'RX173483695',
		'ธนเสฏฐ์_ธนผลต่อวงษ์' => 'RX173483576',
		'อนุพงษ์_ใจเทพ' => 'RX173483602',
		'ปชานน_มูลสาร' => 'RX173483616',
		'ฐิตาภรณ์_บำเหน็จพันธุ์' => 'RX173483770',
		'ภุธเรศ_รอดยิ้ม' => 'RX173483766',
		'พี่จ่วงคุง' => 'รักนีนี่มากๆ',
		'VEERAYUT_TULAKAN' => 'RX173483633',
		'Thanapol_Pechsa-ard' => 'RX173483620',
		'Prae_narumon' => 'RX173483559',
		'ฤทธิ์​_แพร​ขาว​' => 'RX173483806',
		'อภิวัฒน์_บุญรักษา' => 'RX173483837',
		'ก้องภพ_เลี้ยงถนอม' => 'RX173483752',
		'อธิวัฒน์_คำพรมมา' => 'RX173483678',
		'เชิดวงศ์_วงศ์โกมลเชษฐ์' => 'RX173484086',
		'ชาคร_จิตธารานนท์' => 'RX173483797',
		'วชิรวิทย์_ปึงทมวัฒนากูล' => 'RX173483664 ',
		'นายศุภกฤต_สีตัง' => 'RX173483911',
		'นราสิริ​_ยงใย' => 'RX173483960',
	];

	if(utf8_strlen($get['TrackingName']) >= 3){
		
		foreach ($nameList as $keyName => $valueTracking) {

			if (strpos($keyName, $get['TrackingName']) !== false) {
				$resultTracking[$keyName] = $valueTracking;
			}
		}

	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kaning Tracking</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: #6ac3ae;
		color: #000000;
		text-align: center;
	}
</style>

<body style="width:80%;margin: auto;">

	<h3 class="text-center">❄️🌱 Kaning Tracking 🌱🦊</h3>

	<form action="" method="POST">
		<label> - ค้นหาชื่อ - </label>
		<input class="form-control" style="display:inline-block" type="text" name="TrackingName" value="<?= $get['TrackingName'] ?>">
		<p></p>
		<button class="form-control btn btn-sm btn-success" style="display:inline-block;"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>

	</form>
	
	<?php if (count($_POST) > 0): ?>
		
		<div class="text-center">
			
			<?php 

				if (count($resultTracking) > 0) {
					echo "<p>________________________________________________</p>";
					foreach ($resultTracking as $keyName => $valueTracking) {
						
						echo "ชื่อ : ".str_replace("_", " ", $keyName)."<br>"."Tracking : ".$valueTracking;

						$link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking;
						echo "<br><a href='".$link."' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a>";
						echo "<p>________________________________________________</p>";

					}

				} else {

					if(utf8_strlen($get['TrackingName']) >= 3){

						echo "<p>________________________________________________</p>";
						echo "ไม่พบข้อมูล กรุณาติดต่อทางเพจ";
						echo "<p>________________________________________________</p>";

					} else {

						echo "<p>________________________________________________</p>";
						echo "ข้อมูลไม่เพียงพอ กรุณาลองใหม่อีกครั้ง";
						echo "<p>________________________________________________</p>";

					}
					
				}
			?>

		</div>

	<?php endif ?>

	<?php
		if($get['TrackingName'] === "kaningall"){

			foreach ($nameList as $keyName => $valueTracking) {
						
				echo "ชื่อ : ".str_replace("_", " ", $keyName)."<br>"."Tracking : ".$valueTracking;

				$link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking;
				echo "<br><a href='".$link."' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a>";
				echo "<p>________________________________________________</p>";

			}

		}
	?>

	<br><br><br>

	<div class="footer">
		<p></p>
		<b>Kaning CGM48 Thailand Fanclub</b> <br>
		<a href="https://facebook.com/kaningcgm48thailandfanclub" target="_blank" style="color:#000000"><i class="fa fa-facebook-square"></i> Facebook</a> | 
		<a href="https://twitter.com/kaningcgm48thfc" target="_blank" style="color:#000000"><i class="fa fa-twitter-square"></i> Twitter </a> | 
		<a href="https://www.instagram.com/kaningcgm48thfc/" target="_blank" style="color:#000000"><i class="fa fa-instagram"></i> Instagram</a>
		<p></p>
	</div>

</body>
</html>