<?php
require_once('functions.php');
require_once('json.php');

$apartments = jsonToArray('data.json');

displayPageHeader('Delete Room');

if(!isset($_GET['id'])){
	echo 'Please visit our <a href="index.php">Home Page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($apartments)-1){
	echo 'Something went wrong! Please come back to our <a href="index.php">Home Page</a>.';
	die();
}
    
$id = $_GET['id'];
deleteJSON('data.json', $id);
echo 'Delete room successfully. Click <a href="index.php">here</a> to go back to home page.';

displayPageFooter(); ?>
