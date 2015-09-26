<html>
<head>
<title> Codacious - Home </title>
<style type="text/css">
body 
{
background-color:#444445;
color:#FFFFFF;
overflow-x: hidden;
}

.top
{
height: 20%;
position: relative;
overflow-y: hidden;
}

.title
{
float: left;
width: 90%;
height: 100%;
position: absolute;
top: 30px;
left: 20px;

}

.display
{
position: absolute;
top: 20px;
left: 0px;
}

.signin
{
float: right;
height: 100%;
}

.content
{
position: relative;
font-weight: bold;
height: 80%;
}

.leftcolumn
{
position: absolute;
top: 0px;
left: 0px;
float: left;
width: 300px;
height: 100%;
overflow: hidden;
}

.galleryfolder
{
position: relative;
float: left;
text-align: center;
}
.gallerybox
{
position: relative;
margin: auto;
}

.programmers
{
height: 25%;
}

.rightcolumn
{
float: left;
position: relative;
left: 350px;
height: 100%;
}

.projects
{
position: relative;
}

.gallery
{
position: relative;
}

.blog
{
padding-left: 5px;
padding-right: 15px;
padding-bottom: 5px;
position: relative;
}

.blogpost
{
background-color: rgba(255, 255, 255, 0.5);
box-shadow: 0px 0px 5px 5px grey;
font-weight: bold;
color: white;
overflow-x: hidden;
word-wrap: break-word;
position: relative;
}
#Tabs ul {
padding: 0px;
margin: 0px;
margin-left: 10px;
list-style-type: none;
}

#Tabs ul li {
display: inline-block;
clear: none;
float: left;
height: 35px;
position: relative;
margin-top: 16px;
display: block;
margin-left: 6px;
background: #c4c4c4;
line-height: 24px;
padding-left: 10px;
z-index: 9999;
border: 1px solid #ccc;
border-bottom: 0px;

/* The following four lines are to make the top left and top right corners of each tab rounded. */
-moz-border-radius-topleft: 4px;
border-top-left-radius: 4px;
-moz-border-radius-topright: 4px;
border-top-right-radius: 4px;
/* end of rounded borders */

width: 130px;
color: #000000;
text-decoration: none;
font-weight: bold;
}

#Tabs ul li active
{
background: #f8f8f8;
}

#Tabs #Content_Area { // this is the css class for the content displayed in each tab
padding: 0 15px;
clear:both;
line-height:19px;
position: relative;
top: 20px;
z-index: 5;

}

p { padding-left: 15px; }

</style>

</head>
<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" text="#FFFFFF">
<div class="top">

<div class="display">
<?php 
$count = 0;
$images = glob("Gallery/Display/*"); 
foreach($images as $curimg){ 

if ($count < 10)
{
$count++;
if (strlen($curimg)<4);
if (substr($curimg, -4)==".jpg"||(strlen($curimg)>=5 && substr($curimg, -5)==".jpeg"))
{
 echo "<img src='$curimg' height='100%' style='float: left;'></img>"; 
}
}
};  
?> 
</div>
<div class="title">
<div style="font-size: 50pt; font-weight: bolder; font-style: italic; text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black;">
<FONT COLOR="#DDEEFF"> Codacious 
</FONT>
</div>
<div style = "font-size:12pt; float: right; width: 80%; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">adj. Code characterized by excellence, admirability, attractiveness, boldness, and sexiness.</div>
</div>

<div class="signin">
<a href="./signin.php">sign in</a>
</div>
</div>
<div class="content">
<div class="leftcolumn">
<div class="programmers">
<font size=5><u>Meet the programmers</u></font>
<br> <br>
<div style="float: left; width: 50%">
<a href="arunj.htm">
<img src="http://graph.facebook.com/arun.jandaur/picture" height="50%" style="margin-left: auto; margin-right: auto"> </a>
 <br/>
<a href="arunj.htm" style="text-align: center">Arun Jandaur</a>
</div>
<div style="float: right; width: 50%">
<a href="michaelh.htm">
<img src="http://graph.facebook.com/callmemikeh/picture" height="50%" style="margin-left: auto; margin-right: auto"> </a>
 <br/>
<a href="michaelh.htm" style="text-align: center;">Michael Ho</a>
<br>
</div>
</div>

</div>
<div class="rightcolumn">
<div class="blog">
<div id="expandable">
<div id="Tabs">
<ul>
<li id="li_tab1" onclick="tab('tab1')" style="background: #f8f8f8"><a>Blog</a></li>
<li id="li_tab2" onclick="tab('tab2')"><a>Projects</a></li>
<li id="li_tab3" onclick="tab('tab3')"><a>Gallery</a></li>
</ul>
<div id="Content_Area">
<div id="tab1">
<font size=5><a>Blog</a></font> <br/>
<br>
<?php
//$height = 0;
//$dom = new DOMDocument();
//$dom->loadHTMLfile('http://remoteDomain/thispage.html');
//$div=$dom->getElementById('expandable');
$blogs = array_reverse(glob("BlogPosts/*"));
foreach($blogs as $curblog)
{
if (strlen($curblog) < 4);
if (substr($curblog, -4) == ".txt")
{
$filepath = $curblog;
$Handle = fopen($filepath, "r");
$read=fread($Handle, filesize($filepath));
$title=substr($read, strpos($read, "*time")+ 5, strpos($read, "*title")-strpos($read, "*time")-5);
$time=substr($read, 0, strpos($read, "*time"));
$content=substr($read, strpos($read, "*title") + 6, strlen($read)-strpos($read, "*title") - 14);
echo "<div class='blogpost'><div style='margin: 5px 5px 5px 5px;'> <div style='font-size: large; float: left;'>".$title. "</div><div style='float: right;'>".$time."</div><br/></div><div style='padding-top: 0%; padding-left: 3%; padding-right: 1%; padding-bottom: 1%; float: left'>".$content.  "</div></div><br>";
//$height += 
//if ();
fclose($Handle);
}
}
?>
</div>

<div id="tab2" style="display: none;"> <!–- We set its display as none because we don’t want to make this
tab visible by default. The only visible/active tab should be Tab 1 until the visitor clicks on Tab 2. -–>
<div class="projects">
<font size=5><a href="projects.htm">Projects</a></font>
</div>
</div>
<div id="tab3" style="display: none;">
<div class="gallery">
<script src='jquery.js'>
$(document).ready(function(){
  var width = $(this).width()/2;
  $('gallerybox').css({height: "50"; width: "4"});
});
</script>

<?php
$gallery_folders = glob("Gallery/*");
foreach ($gallery_folders as $curfolder)
{
if (is_dir($curfolder)==true)
{
echo"
<div class='gallerybox'>
<img src = 'gallery_folder.gif' class ='galleryfolder'>
</div>
";
}
}
/*$count = 0;
$images = glob("Gallery/*"); 
foreach($images as $curimg){ 

$count++;
if (strlen($curimg)<4);
if (substr($curimg, -4)==".jpg"||(strlen($curimg)>=5 && substr($curimg, -5)==".jpeg"))
{
echo "
<div id='folder".$count."'>
<img src='$curimg' style='float: left;'></img>
</div>
<script src='jquery.js'>
$(document).ready(function(){
  var width = $('gallery').width();
  $('folder".$count."').css('height', width);
  $('folder".$count."').css('width', width);
});
</script>
";
}
} */
?>


</div>
</div>
</div> <!– End of Content_Area Div –>
</div> <!– End of Tabs Div –>
<script type="text/javascript">
function tab(tab) {
document.getElementById('tab1').style.display = 'none';
document.getElementById('tab2').style.display = 'none';
document.getElementById('tab3').style.display='none';
document.getElementById(tab).style.display = 'block';
document.getElementById('li_tab1').style.background="#c4c4c4";
document.getElementById('li_tab2').style.background="#c4c4c4";
document.getElementById('li_tab3').style.background="#c4c4c4";
document.getElementById('li_'+tab).style.background="#f8f8f8";
}
</script>

</div>


</div>
</div>
</div>


</body>
<html>
