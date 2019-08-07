<?php
if(isset($_POST["submit"])) {
$target_file = basename($_FILES["fileUpload"]["name"]);
$target_sementara = $_FILES["fileUpload"]["tmp_name"];
$target_dir = "uploads/";
$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
if($check !== false) {
	$fullPath = $target_dir.$target_file;
	$terupload = move_uploaded_file($target_sementara, $fullPath);
	$imageFileType = pathinfo($fullPath, PATHINFO_EXTENSION);

	if ($terupload) {
		echo "Upload Berhasil </br>";
		echo "link: <a href='".$target_dir.$target_file."'>".$target_file."</a>";

	}else{
		echo "Upload Gagal";
	}

		echo "File is an image - " . $check["mime"] . ".";
		echo "<img src='$fullPath'>";
	} else {
		echo "File is not an image.";
}
}
?>