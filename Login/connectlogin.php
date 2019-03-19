<?php
try {
	$pdo = new PDO("mysql:host=10.199.66.227;dbname=19s2_g5;charset=utf8", "19S2_g5", "9GtmFPhs");
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด : ".$e->getMessage();
}
?>