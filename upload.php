<?php
	$uploadfile = 'upload/' . time() . '_' . basename($_FILES['imgUpdate']['name']);
	move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $uploadfile);
	echo $uploadfile;
