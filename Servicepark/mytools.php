<?php
function button($caption,$action,$param,$dest) {
	$request = "Request('$action','$dest','$param');";		//z.B. Request('bank.php','','content');
	$class='class="button"';
	return "<a $class href='#' onClick=$request >$caption</a>";
 }
function imglink($caption,$action,$param,$dest,$img) {
	$request = "Request('$action','$dest','$param');";		// hochkomma in anführungszeichen !!
	$link="<img src='images/$img' title='$caption' height='18px' align='center' onClick=$request>";
	return $link;
 }
?>