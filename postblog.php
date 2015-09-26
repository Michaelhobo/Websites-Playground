<?php
$date=getdate();
$newFile = "BlogPosts/".$date[year]."-".$date[mon]."-".$date[mday]."T".$date[hours]."-".$date[minutes]."-".$date[seconds].".txt";
$Handle = fopen($newFile, "w");
fwrite($Handle, $date[month]." ".$date[mday].", ".$date[year]." ".$date[hours].":".$date[minutes].":".$date[seconds]."*time". $_POST["title"]."*title".$_POST["content"]."*content");
fclose($Handle);
echo '<meta http-equiv="refresh" content="0; url=http://localhost/admin.php"></meta>';
exit();
?>
