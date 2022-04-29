<?php
$target_dir = "uploads/";
//$filename = 'readme.txt';

if (unlink($target_dir)) {
	echo 'The file ' .$target_dir . ' was deleted successfully!';
} else {
	echo 'There was a error deleting the file ' . $target_dir;
}