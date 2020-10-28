<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--===============================================================================================--> 
    <?php include 'links.php'; ?>

<!--===============================================================================================-->
    

</head>
<body>

<div class="main-div">
    <h1>All the data of users in descending order of first_name.</h1>

    <div class="center-div">
        <div class="table-responsive" style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th style="text-align: center;">email_id</th>
                    </tr>
                </thead>

                <tbody>
                <?php

                    include 'db.php';

                    $selectquery = "select * from user order by first_name desc";

                    $query = mysqli_query($con, $selectquery);

                    $nums = mysqli_num_rows($query);

                    while($res = mysqli_fetch_array($query)){
                        
                ?>
                        <tr>
                        <td><?php echo $res['id']?></td>
                        <td><span class="firstName-style"><?php echo $res['first_name']?></span></td>
                        <td><?php echo $res['last_name']?></td>
                        <td><?php echo $res['email_id']?></td>
                        </tr>

                <?php
                    }
                ?>
                

                    
                </tbody>
            </table>

        </div>

    </div>


</div>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    
</body>
</html>