<html>
<head>
<title> Codacious - Admin </title>
<style type="text/css">
body
{
background-color: #444445;
color:#FFFFFF;
}
.admin
{
float: right;
}
.user
{
float: left;
}
a:link
{
color: #FFFFFF;
}
</style>
</head>
<body>
<h1> Account Administration </h1>
<div class="user">
<h3>Upload File</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" multiple name="uploadField[]" />
<input type="submit" value="Upload"/>
</form>

</br>
<h3> Your Files </h3>
<?php
$files = glob("Uploads/*");
foreach ($files as $curfile)
{
echo "<a href='".$curfile."'>".substr($curfile, 8, strlen($curfile))."</a></br>";
}
?>
</div> <!--End of User Section-->
<div class="admin">
<h3>Add blog post</h3>
<script>
function postblog()
{
window.open("postblog.php");
}
</script>

<form action="postblog.php" method="post">
<input type="text" size="20" name="title"> <br>
<textarea rows="10" cols="20" name="content"></textarea> <br>
<input type="submit" value="Post">
</form>
<h3>Upload Images to Gallery</h3>
<form action="uploadimage.php" method="post" enctype="multipart/form-data">
<input type="file" multiple name="uploadField[]" />
<br>
Select Destination: <select name="destination" selected value="New Folder" >
<option>New Folder</option>
<?php
$galleryfolders = glob("Gallery/*");
foreach($galleryfolders as $curfolder)
{
if (is_dir($curfolder)==true)
{
echo "<option>" . substr($curfolder, 8, strlen($curfolder)). "</option>";
}
}
?>
</select>
</br>
If "New Folder" was chosen, enter the name of the new folder: </br>
<input type="text" size="30" name="newfolder">
<br>
<input type="submit" value="Upload"/>
</form>
</div> <!--End of Admin Section-->
</body>
</html>