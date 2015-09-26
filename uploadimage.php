<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
//echo SITE_ROOT;
if ($_POST["destination"]=="New Folder") 
{
	mkdir("Gallery/".$_POST["newfolder"]);
	for ($i = 0; $i < count($_FILES['uploadField']['name']); $i++)
	{
		$target_path = "Gallery/".$_POST["newfolder"]."/".$_FILES['uploadField']['name'][$i];
			//echo "Upload: " . $_FILES['uploadField']['name'][$i] . "<br>";
			//  echo "Type: " . $_FILES["uploadField"]["type"][$i] . "<br>";
			 // echo "Size: " . ($_FILES['uploadField']["size"][$i] / 1024) . " kB<br>";
			//  echo "Temp file: " . $_FILES["uploadField"]["tmp_name"][$i] . "<br>";
		move_uploaded_file($_FILES['uploadField']['tmp_name'][$i], SITE_ROOT.DIRECTORY_SEPARATOR.$target_path);
	}
}
else
{
	for ($i = 0; $i < count($_FILES['uploadField']['name']); $i++)
	{
		$target_path = "Gallery/".$_POST["destination"]."/".$_FILES['uploadField']['name'][$i];
			//echo "Upload: " . $_FILES['uploadField']['name'][$i] . "<br>";
			//  echo "Type: " . $_FILES["uploadField"]["type"][$i] . "<br>";
			 // echo "Size: " . ($_FILES['uploadField']["size"][$i] / 1024) . " kB<br>";
			//  echo "Temp file: " . $_FILES["uploadField"]["tmp_name"][$i] . "<br>";
		move_uploaded_file($_FILES['uploadField']['tmp_name'][$i], SITE_ROOT.DIRECTORY_SEPARATOR.$target_path);
	}
}
echo '<meta http-equiv="refresh" content="0; url=http://localhost/admin.php"></meta>';
//echo "<a href='admin.php'>Go Back</a>"
?>