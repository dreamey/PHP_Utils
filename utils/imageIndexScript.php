<?php
	$Description_Ini = parse_ini_file("images/ImageDescriptions.ini");
    $files = scandir('images/');
	shuffle($files);
    foreach($files as $file) {
        if($file !== "." && $file !== ".." && $file !== "ImageDescriptions.ini") {
			$Description = $Description_Ini[$file];
			if($Description == ""){$Description = "unknown";}
			$EndDiv = "<div class=\"desc\">$Description</div>
				</div>\r\n\r\n";
			if($Description !== "unknown"){
				$EndDiv = "<div class=\"desc\"><a style=\"color:#310042\" href=\"$Description\">src</a></div>
				</div>\r\n\r\n";
			}
            echo "				<div class=\"gallery\">
					<a target=\"_blank\" href=\"images/$file\">
					<img src=\"images/$file\" alt=\"$file\" width=\"900\" height=\"600\" class=\"responsive\">
					</a>
					";
			echo "$EndDiv";
        }
    }
?>