<?php 

$video = "";
$video_name = "";

if(isset($_GET['video'])){

$video = $_GET['video'];

}


?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="videos.css" />
<link rel="stylesheet" type="text/css" href="sms.css" />
</head>

<body>

<div class="container">

<?php require_once('header.php'); ?>

<div class="content_container">
<div class="top_container">
<a href="video.php?video=<?php echo $video; ?>" class="top_back_link">Back</a>
2 States
</div>
<div class="movie_content_container">

<div class="payment_container">
Pay using Credit Card
</div>

<div class="payment_list_container">
<ul class="payment_list">
<form action="video1.php?video=2 states" method="post">
<li class="credit_card_list"><input type="text" name="credit_card_field" class="credit_card_field" pattern="[0-9]{13-16}" /></li>
<li class="credit_card_list"><input type="submit" name="credit_card_submit_field" class="credit_card_submit_field" value="Submit" /></li>
</form>
</ul>
</div>


</div>
</div>

</div>

</body>
</html>