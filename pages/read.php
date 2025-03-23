<?php
    $title = "Profile";

// Check existence of id parameter before processing further
if(isset($_GET["iid"]) && !empty(trim($_GET["iid"]))){
    // Include config file
    require_once "../config/config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM `place_tbl` WHERE id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["iid"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row['name'];
                $addr = $row['address'];
                $state = $row['state'];
                $email = $row['email'];
                $phone = $row['phone'];
                $site = $row['website'];
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
    
    // Close connection
    mysqli_close($conn);
} 
//END OF INSTITUTION READ 

elseif(isset($_GET["oid"]) && !empty(trim($_GET["oid"]))){
    // Include config file
    require_once "../config/config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM `place_tbl` WHERE id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["oid"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row['name'];
                $addr = $row['address'];
                $state = $row['state'];
                $email = $row['email'];
                $phone = $row['phone'];
                $site = $row['website'];
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
    
    // Close connection
    mysqli_close($conn);
}
// END OF ORGANISATION READ
else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
require '../inc/indexheader.php';
?>

        <div class="container">
            <div class="row">
                <div style="margin:0px auto; width: 40%">
                    <div class="well-header bg-danger">
                     <h3>View Record</h3>
                 </div>
                 <!-- records -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label>Name</label>
                        <p><b><?php echo $row["name"]; ?></b></p>
                        <label>Email</label>
                        <p><b><?php echo $email; ?></b></p>
                    <div class="form-group">
                        <label>Phone</label>
                        <p><b><?php echo $phone; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?php echo $row["address"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p><b><?php echo $row["desc"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <p><b><?php echo $state; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <p><b><?php echo $site; ?></b></p>
                    </div>
                </div>
                    <div class="panel-footer">                    
                        <p><a href="admin.php" class="btn btn-primary">Back</a></p>
                    </div>
                    </div>
 
                </div>
            </div>        
        </div>
</body>
</html>
