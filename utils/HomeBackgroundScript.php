<?php 
$Description_Ini = parse_ini_file("ini/BackgroundDescriptions.ini");
require 'RandomImageScript.php';
$randomImage = random_image('backgrounds');
echo "
	<style>
	body{
		/* Image Source - $Description_Ini[$randomImage] */
		background-image: url(\"$randomImage\");
		background-size: cover;
		background-repeat: cover;
		background-color: #464646;
	}
	</style>
";
?>