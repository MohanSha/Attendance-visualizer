<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
// Include config file
require_once 'config.php';

 // Prepare a select statement
` $sql = "SELECT * FROM attendance WHERE id = ?";
 
 if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    // Set parameters
    $param_id = trim($_GET["id"]);

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
            /* Fetch result row as an associative array. Since the result set
            contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
             // Retrieve individual field value
             $id = $row["id"];
             $name = $row["name"];
             $branch = $row["branch"];
         } else{
             // URL doesn't contain valid id parameter. Redirect to error page
             header("location: error.php");
             exit();
         }
         
     } else{
         echo "Oops! Something went wrong. Please try again later.";
     }
 }
  // Close statement
  mysqli_stmt_close($stmt);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    //header("location: error.php");
    exit();
} 


?>

<html>
    <head>
        <title>Search</title>
    </head>
    <body>
        <h1>View Record</h1>
        <form action="" method="get"></form>
        ID <input typr="text" id=q> <br><br>
        <input type="submit" value="Submit" />

        ID:<p><?php echo $row["id"]; ?></p>
        Name:</p><?php echo $row["name"]; ?></p>
        Branch:</p><?php echo $row["branch"]; ?></p;>
    </body>
</html>