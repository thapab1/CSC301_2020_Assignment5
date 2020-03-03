<?php
require_once('functions.php');
require_once('json.php');
displayPageHeader('Add Room for Renting');

if(count($_POST) > 0){
    $content = readJSON('data.json');
    array_push($content, $_POST); // Add to the front of the array
    writeJSON('data.json',$content);
    echo 'Your room is added successfully to our listing. 
    Click <a href="index.php"> here </a> to go back to homepage';
} else {
    include('create_template.php');
}

displayPageFooter(); ?>