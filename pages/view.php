    <?php
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Include config file
        require_once "../config/config.php";
    
        // Prepare a select statement
        $sql="SELECT * FROM place_tbl WHERE id = ?"; 
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                
                // Set parameters
                $param_id = trim($_GET["id"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
            
                    
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
             
            // Close statement
            mysqli_stmt_close($stmt);
            
            // Close connection
            mysqli_close($conn);
    } 
    require '../inc/indexheader.php';

    ?>
    <div class="container">
        <div class="row" style="margin:0px auto; width: 40%"> 
            <div class="panel panel-default">
                <div class="panel-body">
                    <label>Name</label>
                    <p><b><?php echo $row["name"]; ?></b></p>
                    <label>Email</label>
                    <p><b><?php echo $row["email"]; ?></b></p>
                <div class="form-group">
                    <label>Phone</label>
                    <p><b><?php echo $row["phone"]; ?></b></p>
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
                    <p><b><?php echo $row["state"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <p><b><?php echo $row["website"]; ?></b></p>
                </div>
                </div>
                <div class="panel-footer">                    
                    <p><a href="admin.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>