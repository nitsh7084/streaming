<?php 

$video = "nothing";



if(isset($_GET['video']) && !empty($_GET['video'])){

$video = $_GET['video'];

}



?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>


<div class="container">
<?php 

echo '<video id="movie"
            autoplay 
            controls
            preload=auto
            playbackRate="1"
            width="800">
<source src="'.$video.'.mp4" type="video/mp4" />
<source src="'.$video.'.webm" type="video/webm" />
<source src="'.$video.'.ogg" type="application/ogg" />
<embed src="'.$video.'.mp4" type="application/x-shockwave-flash" width="1024" height="798" allowscriptaccess="always" allowfullscreen="true"></embed>
</video>';
?>
</div>

</body>
</html>
