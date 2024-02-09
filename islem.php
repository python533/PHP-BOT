<?php
if (isset($_POST['gönder'])) {
$url=$_POST['url'];

}

file_get_contents($url);
$pattern="/ain/i";
echo preg_match($pattern,$url);


?>


<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);



?>
