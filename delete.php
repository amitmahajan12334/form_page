<?php

include 'db.php';

$id = $_GET['idth'];

$deletequery = "delete from user where id=$id ";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
    <script>
        alert("Deteled Successfully");
    </script>

    <?php
}else{
    ?>
    <script>
        alert("Not Deleted");
    </script>

    <?php
}

header('location:printData.php');


?>