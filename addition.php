<?php
$firstnumber = htmlspecialchars(trim($_POST['firstnumber']));
$secondnumber = htmlspecialchars(trim($_POST['secondnumber']));
if($firstnumber == ''){
	echo 'Enter the first number';
	return false;
}
if($secondnumber == ''){
	echo 'Enter the second number';
	return false;
}
if(is_numeric($firstnumber) && is_numeric($secondnumber)){
	$addition = $firstnumber + $secondnumber;
	echo $addition;
}
else{
	echo 'Please enter valid numbers to add';
	return false;
}
