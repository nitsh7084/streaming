<?php 

$video = "nothing";

function filter_text($value){
$value = mysql_real_escape_string($value);
$value = htmlentities($value);
$value = stripslashes($value);
$value = strip_tags($value);
return $value;
}

if(isset($_GET['video']) && !empty($_GET['video'])){

$video = filter_text($_GET['video']);

}

echo $video;


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>


<div class="container">
<?php 

echo '<video preload controls>
<source src="'.$video.'.mp4" type="video/mp4" />
<source src="'.$video.'.webm" type="video/webm" />
<source src="'.$video.'.ogg" type="application/ogg" />
<object type="application/x-shockwave-flash" data="flvplayer.swf"
width="854" height="504">
<param name="allowfullscreen" value="true">
<param name="allowscriptaccess" value="always">
<param name="flashvars" value="file='.$video.'.mp4">
<!--[if IE]><param name="movie" value="flvplayer.swf"><![endif]-->
<img src="video.jpg" width="854" height="480" alt="Video">
<p>Your browser can’t play HTML5 video. <a href="video.webm">Download
it</a> instead.</p>
</object>
</video>';
?>
</div>

</body>
</html>