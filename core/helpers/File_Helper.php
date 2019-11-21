<?php

// hàm upload file, tất cả các nơi upload đều dùng lại hàm này
function upload_file($file, $dir)
{
	$output_dir = "public/uploads"; //Path for file upload
	$fileCount = count($_FILES["image"]['name']);
	$RandomNum = time();
	$ImageName = str_replace(' ', '-', strtolower($_FILES['image']['name'][$i]));
	$ImageType = $_FILES['image']['type'][$i]; //"image/png", image/jpeg etc.
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt = str_replace('.', '', $ImageExt);
	$ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName . '-' . $RandomNum . '.' . $ImageExt;
	$ret[$NewImageName] = $output_dir . $NewImageName;
	move_uploaded_file($_FILES["image"]["tmp_name"][$i], $output_dir . "/" . $NewImageName);
	$data = array(
		'image' => $NewImageName
	);
	$this->model->file_details($data);
	echo "Image Uploaded Successfully";
}
