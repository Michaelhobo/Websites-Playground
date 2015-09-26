<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
echo SITE_ROOT;
for ($i = 0; $i < count($_FILES['uploadField']['name']); $i++)
{
$target_path = $_POST["destination"]."/".$_FILES['uploadField']['name'][$i];
echo "Upload: " . $_FILES['uploadField']['name'][$i] . "<br>";
  echo "Type: " . $_FILES["uploadField"]["type"][$i] . "<br>";
  echo "Size: " . ($_FILES['uploadField']["size"][$i] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["uploadField"]["tmp_name"][$i] . "<br>";
move_uploaded_file($_FILES['uploadField']['tmp_name'][$i], SITE_ROOT.DIRECTORY_SEPARATOR.$target_path);
}
echo "<a href='admin.php'>Go Back</a>"
?>