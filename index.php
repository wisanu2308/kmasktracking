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
		'ทดสอบ' => 'EI878824259TH',
		'แอดกัส' => 'โดนพี่ฟอร์ตกแล้วนะ',
		'นายอัษฎา_เบิกไพร' => 'EI878824259TH',
		'พิชญุตม์_ธงศิริ' => 'EE000000000TH',
		'ชยุตพงศ์_ชุมนวน' => 'EE000000000TH',
		'ธนกฤต_ธนามี' => 'EE000000000TH',
		'กิตติศักดิ์_สายคำยศ' => 'EE000000000TH',
		'นายนราธิป_ปัญญาอินทร์' => 'EE000000000TH',
		'ลลิตา_รัตนรุ่งศรี' => 'EE000000000TH',
		'ปฏิภาณ_หลวงเทพ' => 'EE000000000TH',
		'ณฐวัฒน์​_คำนนท์ใส' => 'EE000000000TH',
		'ลลิตนภัส_ปะสะสุข' => 'EE000000000TH',
		'นายทรงพล_ทันจันทึก' => 'EE000000000TH',
		'เจษฎา_เขียวเพชร' => 'EE000000000TH',
		'นายอนุวัฒน์_ลอคำ' => 'EE000000000TH',
		'นายฐิติ_จันทร์ศิริยานันท์' => 'EE000000000TH',
		'วรวุฒิ_ศรีลัดดา' => 'EE000000000TH',
		'ปนพ_ใจกว้าง' => 'EE000000000TH',
		'กันตชาติ_ญาณสูตร' => 'EE000000000TH',
		'ชนาธิป_อิสรารุ่งเรือง' => 'EE000000000TH',
		'นายสุภาณุพัฒน์_ทีบุตร' => 'EE000000000TH',
		'สราวุธ_พิชนนาค' => 'EE000000000TH',
		'ชลิต_สุกิจรัตนาภรณ์' => 'EE000000000TH',
		'Jimmy_Derbra-ern' => 'EE000000000TH',
		'ณัฐภัทร_เนินงาม' => 'EE000000000TH',
		'นายภัคพงศ์_คำกุล' => 'EE000000000TH',
		'ชัญญา_สุรทานนท์' => 'EE000000000TH',
		'สมเกียรติ​_กันทาผาม' => 'EE000000000TH',
		'บุญฤทธิ์_ลอยมั่นคง' => 'EE000000000TH',
		'รัชศักดิ์_นนทะวงศ์' => 'EE000000000TH',
		'ธนันต์_พีระพัฒนพงษ์' => 'EE000000000TH',
		'ณัฐชนน​_แสงแก้ว' => 'EE000000000TH',
		'ชวนันท์_ชนไมตรี' => 'EE000000000TH',
		'เกริกพล_ถาวรกังวาฬ' => 'EE000000000TH',
		'ศักดิ์ดา_แก่นสาร' => 'EE000000000TH',
		'siriwat_paknapa_' => 'EE000000000TH',
		'นายอุกฤษณ์_คราวจันทึก' => 'EE000000000TH',
		'กานต์_กุฏอินทร์' => 'EE000000000TH',
		'นายจตุพร_คณารศ' => 'EE000000000TH',
		'นาย_สุวพล_หอมจันทร์' => 'EE000000000TH',
		'สุทธิภัทร_คำเรียบ' => 'EE000000000TH',
		'Surachai.je' => 'EE000000000TH',
		'ภาพิมล_เล้าทักษ์ศิริโชติ' => 'EE000000000TH',
		'ธนเสฏฐ์_ธนผลต่อวงษ์' => 'EE000000000TH',
		'อนุพงษ์_ใจเทพ' => 'EE000000000TH',
		'ปชานน_มูลสาร' => 'EE000000000TH',
		'ฐิตาภรณ์_บำเหน็จพันธุ์' => 'EE000000000TH',
		'ภุธเรศ_รอดยิ้ม' => 'EE000000000TH',
		'พี่จ่วงคุง' => 'รักนีนี่มากๆ',
		'VEERAYUT_TULAKAN' => 'EE000000000TH',
		'Thanapol_Pechsa-ard' => 'EE000000000TH',
		'Prae_narumon' => 'EE000000000TH',
		'ฤทธิ์​_แพร​ขาว​' => 'EE000000000TH',
		'อภิวัฒน์_บุญรักษา' => 'EE000000000TH',
		'ก้องภพ_เลี้ยงถนอม' => 'EE000000000TH',
		'อธิวัฒน์_คำพรมมา' => 'EE000000000TH',
		'เชิดวงศ์_วงศ์โกมลเชษฐ์' => 'EE000000000TH',
		'ชาคร_จิตธารานนท์' => 'EE000000000TH',
		'วชิรวิทย์_ปึงทมวัฒนากูล' => 'EE000000000TH',
		'นายศุภกฤต_สีตัง' => 'EE000000000TH',
		'นราสิริ​_ยงใย' => 'EE000000000TH',
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
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<body style="width:80%;margin: auto;">

	<h3 class="text-center">:: Kaning Tracking ::</h3>

	<form action="" method="POST">
		<label>ค้นหาชื่อ</label>
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
						echo "<br><a href='".$link."' class='btn btn-xs btn-info' style='color:white;'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a>";
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

</body>
</html>