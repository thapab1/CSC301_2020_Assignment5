<?php
include('functions.php');
$apartments = jsonToArray('data.json');

displayPageHeader('RoomsForRent');
?>

<!-- Button to add a room for renting -->
<a class="btn btn-primary btn-lg" href="create.php" role="button">Add Your Room For Renting</a>
<br><br>

<!-- Show list of rooms available -->
<h3>Rooms Available Now:</h3>
<ul class="list-group">
    
    <?php
    $count = count($apartments);
    for($i=0; $i<$count; ++$i){
        displayList($apartments, $i);
    }
    ?>            
</ul>

<?php displayPageFooter(); ?>