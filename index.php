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
		'นายอัษฎา_เบิกไพร' => 'RX173483593TH',
		'พิชญุตม์_ธงศิริ' => 'RX173483942TH',
		'ชยุตพงศ์_ชุมนวน' => 'RX173483721TH',
		'ธนกฤต_ธนามี' => 'RX173483749TH',
		'กิตติศักดิ์_สายคำยศ' => 'RX173484041TH',
		'นายนราธิป_ปัญญาอินทร์' => 'RX173484055TH',
		'ลลิตา_รัตนรุ่งศรี' => 'RX173483647TH',
		'ปฏิภาณ_หลวงเทพ' => 'RX173483987TH',
		'ณฐวัฒน์​_คำนนท์ใส' => 'RX173484024TH',
		'ลลิตนภัส_ปะสะสุข' => 'RX173483718TH',
		'นายทรงพล_ทันจันทึก' => 'RX173483939TH',
		'เจษฎา_เขียวเพชร' => 'RX173483845TH',
		'นายอนุวัฒน์_ลอคำ' => 'RX173483735TH',
		'นายฐิติ_จันทร์ศิริยานันท์' => 'RX173483956TH',
		'วรวุฒิ_ศรีลัดดา' => 'RX173484072TH',
		'ปนพ_ใจกว้าง' => 'RX173483854TH',
		'กันตชาติ_ญาณสูตร' => 'RX173483559TH',
		'ชนาธิป_อิสรารุ่งเรือง' => 'RX173483655TH',
		'นายสุภาณุพัฒน์_ทีบุตร' => 'RX173483973TH',
		'สราวุธ_พิชนนาค' => 'RX173483531TH',
		'ชลิต_สุกิจรัตนาภรณ์' => 'RX173483528TH',
		'Jimmy_Derbra-ern' => 'RX173483823TH',
		'ณัฐภัทร_เนินงาม' => 'RX173483995TH',
		'นายภัคพงศ์_คำกุล' => 'RX173483908TH',
		'ชัญญา_สุรทานนท์' => 'RX173483925TH',
		'สมเกียรติ​_กันทาผาม' => 'RX173484015TH',
		'บุญฤทธิ์_ลอยมั่นคง' => 'RX173484007TH',
		'รัชศักดิ์_นนทะวงศ์' => 'RX173483885TH',
		'ธนันต์_พีระพัฒนพงษ์' => 'RX173483704TH',
		'ณัฐชนน​_แสงแก้ว' => 'RX173484069TH',
		'ชวนันท์_ชนไมตรี' => 'RX173483580TH',
		'เกริกพล_ถาวรกังวาฬ' => 'RX173483810TH',
		'ศักดิ์ดา_แก่นสาร' => 'RX173483562TH',
		'siriwat_paknapa_' => 'RX173483783TH',
		'นายอุกฤษณ์_คราวจันทึก' => 'RX173483871TH',
		'กานต์_กุฏอินทร์' => 'RX173484038TH',
		'นายจตุพร_คณารศ' => 'RX173483868TH',
		'นาย_สุวพล_หอมจันทร์' => 'RX173483681TH',
		'สุทธิภัทร_คำเรียบ' => 'RX173483899TH',
		'Surachai.je' => 'RX173484090TH',
		'ภาพิมล_เล้าทักษ์ศิริโชติ' => 'RX173483695TH',
		'ธนเสฏฐ์_ธนผลต่อวงษ์' => 'RX173483576TH',
		'อนุพงษ์_ใจเทพ' => 'RX173483602TH',
		'ปชานน_มูลสาร' => 'RX173483616TH',
		'ฐิตาภรณ์_บำเหน็จพันธุ์' => 'RX173483770TH',
		'ภุธเรศ_รอดยิ้ม' => 'RX173483766TH',
		'พี่จ่วงคุง' => 'รักนีนี่มากๆ',
		'VEERAYUT_TULAKAN' => 'RX173483633TH',
		'Thanapol_Pechsa-ard' => 'RX173483620TH',
		'Prae_narumon' => 'RX173483559TH',
		'ฤทธิ์​_แพร​ขาว​' => 'RX173483806TH',
		'อภิวัฒน์_บุญรักษา' => 'RX173483837TH',
		'ก้องภพ_เลี้ยงถนอม' => 'RX173483752TH',
		'อธิวัฒน์_คำพรมมา' => 'RX173483678TH',
		'เชิดวงศ์_วงศ์โกมลเชษฐ์' => 'RX173484086TH',
		'ชาคร_จิตธารานนท์' => 'RX173483797TH',
		'วชิรวิทย์_ปึงทมวัฒนากูล' => 'RX173483664 TH',
		'นายศุภกฤต_สีตัง' => 'RX173483911TH',
		'นราสิริ​_ยงใย' => 'RX173483960TH',
		'ประสิทธิ์_สุนทรวาณิชย์กิจ' => 'RP657891703TH',
		'สิทธิโชค_สุวรรณกูฏ' => 'RP657891717TH',
		'วสุรัตน์_ชาพิมล' => 'RP657891734TH',
		'พงศธร_จันทร์สว่าง' => 'RP657891725TH',
	];

	if(utf8_strlen($get['TrackingName']) >= 3){
		
		foreach ($nameList as $keyName => $valueTracking) {

			$NameWithSpace = str_replace("_", " ", $keyName);
			if (strpos($NameWithSpace, $get['TrackingName']) !== false) {
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
			
			<?php if (count($resultTracking) > 0) { ?>

			<br>
			<table class="table table-hover table-condensed" align="center" style="width:100%;">
				<tr>
					<th style="text-align:center;">ชื่อผู้รับ</th>
					<th style="text-align:center;">Tracking</th>
					<th style="text-align:center;">รายละเอียด</th>
				</tr>

				<?php foreach ($resultTracking as $keyName => $valueTracking) : ?>
					<tr>
						<td astyle="text-align:center;"><?= str_replace("_", " ", $keyName); ?></td>
						<td astyle="text-align:center;"><?= $valueTracking; ?></td>

						<?php $link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking; ?>
						<td astyle="text-align:center;"><a href='<?= $link ?>' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a></td>
					</tr>
				<?php endforeach; ?>

			</table>

			<?php } else { 
				
					if(utf8_strlen($get['TrackingName']) >= 3){
						echo "<br><h4>ไม่พบข้อมูล กรุณาติดต่อทางเพจ</h4>";
					} else {
						echo "<br><h4>ข้อมูลไม่เพียงพอ กรุณาลองใหม่อีกครั้ง</h4>";
					}	
				}
			?>
		</div>

	<?php endif ?>

	<?php if($get['TrackingName'] === "kaningall"){ ?>

			<br>
			<table class="table table-hover table-condensed" align="center" style="width:100%;">
				<tr>
					<th style="text-align:center;">ชื่อผู้รับ</th>
					<th style="text-align:center;">Tracking</th>
					<th style="text-align:center;">รายละเอียด</th>
				</tr>

				<?php foreach ($nameList as $keyName => $valueTracking): ?>
					<tr>
						<td style="text-align:center;"><?= str_replace("_", " ", $keyName); ?></td>
						<td style="text-align:center;"><?= $valueTracking; ?></td>

						<?php $link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking; ?>
						<td style="text-align:center;"><a href='<?= $link ?>' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a></td>
					</tr>
				<?php endforeach; ?>

			</table>
	<?php } ?>

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