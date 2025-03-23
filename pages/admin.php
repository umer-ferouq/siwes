<?php
session_start();

     $title = "Admin Dashboard";
     require '../inc/indexheader.php';
     include '../config/config.php';

     // Connect to the database
     $db = new PDO('mysql:host=localhost;dbname=siwes_db', 'root', '');
     
     // Retrieve user information from the database
     $stmt = $db->prepare("SELECT * FROM admin WHERE admin_id = ?");
     $stmt->execute([$_SESSION['id']]);
     $user = $stmt->fetch();
     
     // Handle form submission
     if (isset($_POST['save']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
       // Update user information in the database
       $name = $_POST['name'];
       $phone = $_POST['phone'];
     
       $stmt = $db->prepare("UPDATE admin SET name = ?, phone = ? WHERE admin_id = ?");
       $stmt->execute([$name, $phone, $_SESSION['admin_id']]);
       // Display success message
       echo '<p>Profile updated!</p>';
     }
    //  adding department
     if(isset($_POST['adddept']) && !empty($_POST['dname'])
   ){

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

       $name = test_input(mysqli_real_escape_string($conn, $_POST['dname']));
       $hod = test_input(mysqli_real_escape_string($conn, $_POST['hod']));
       $task = test_input(mysqli_real_escape_string($conn, $_POST['task']));
    
        $sql = "INSERT INTO `dept_tbl`(`name`, hod, task) VALUES ('$name', '$hod', '$task')";
        $result = mysqli_query($conn, $sql);

        echo "<script>alert('Department Added Successfully');</script>";
       }
     
?>
          <!-- nav content goes here -->
          <li><a href="admin.php">Dashboard</a></li>
        <li><a href="admstaff.php">Staff</a></li>
        <li><a data-toggle="modal" data-target="#adddept">Add Department</a></li>
        <li><a href="adminst.php">Institutions</a></li>
        <li><a href="admorg.php">Organisations</a></li>
        <li><a href="admstd.php">Student</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li class="appointment-btn"><a href="#profile"><i class="fa fa-register"></i>Profile</a></li>
      </ul>
    </div> 
  </div>
        
</nav>

<div class="container-fluid index-background">
  <div class="container ">
             <div class="col-sm-3 col-md-3"></div>
             <h3>Admin Dashboard</h3>
             
        <div class="row"> 
             
             <div class="col-md-8 panel">
             <h3>List of Departments</h3>
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Department</th>
                    <th>HOD Name</th>
                    <th>Task</th>
                    <th>Date Created</th>
                  </tr>
                </thead>
                <?php
                $selquery ="SELECT * FROM `dept_tbl` ORDER BY name ASC";
                  //bind connection with query
                $resl = mysqli_query($conn, $selquery);
                  //loop through the table
                $j = 0;
                while($row = mysqli_fetch_assoc($resl)){
                  $j++;
                  $aid = $row['id']; 
                ?>
                <tbody>
                
                <tr>
                    <td class="center"> <?php echo $j;?></td>
                    <td class="center"> <?php echo $row['name'] ?></td>
                    <td class="center"> <?php echo $row['hod'] ?></td>
                    <td class="center"> <?php echo $row['task'] ?></td>
                    <td class="center"> <?php echo $row['created'] ?></td>
                    </tr>
                    <?php }
                      mysqli_free_result($resl);
                    ?>
                </tbody>
              </table>             </div>
             <div class="col-md-4 panel" id="profile">
             <h3 class="mb-0 display-5 text-center fw-semibold">Profile</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group mb-1">
                    <label for="name" class="form-label mt-3">Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>"><br>
                </div>
                <div class="form-group mb-1">
                    <label for="email" class="form-label mt-3">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user['admin_email']; ?>" disabled><br>
                </div>
                <div class="form-group mb-1">
                    <label for="phone" class="form-label mt-3">Phone:</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>">
                </div>
                <div class="form-group mb-1">
                  <button type="submit" class="btn btn-danger w-50 mt-3" name="save">Save Changes</button>
                </div>
            </form>
             </div>
        </div>
            
        <div class="row">
          
        </div>
        <div class="row">
            <div class="col-sm-7">
              
            </div>

              <div class="col-sm-5">
                  
             
              </div>
             
      </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="adddept" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <span class="text">Create Department</span>
      </div>
      <div class="modal-body">
      <div class="activity">
              <div class="title">
              </div>
              <?php if (!empty($errors)): ?>
              <div class="alert alert-danger">
                  <ul>
                  <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                  </ul>
              </div>
              <?php endif; ?>
              <div class="boxes">
                  <div class="box box1">
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-group">
                          <label for="email">Department Name:</label>
                          <input type="text" class="form-control" name="dname" required>
                      </div>
                      <div class="form-group">
                        <label for="unit">HOD:</label>
                        <select class="form-control" name="hod">
                          <?php 
                            $hod = mysqli_query($conn, "select staff_id, staff_name, place_id from staff_tb WHERE place_id = '1' ORDER BY staff_name ASC");
                              while($row = mysqli_fetch_array($hod)){
                                echo '<option value='.$row["staff_name"].'>'.$row["staff_name"].'</option>';
                              }
                            mysqli_free_result($hod);?>
                        </select> 
                      </div>
                      <div class="form-group">
                          <label for="task">Task:</label>
                          <input type="text" class="form-control" name="task" required>
                      </div>
                      <button class="btn btn-danger button-full" type="submit" name="adddept">Add Department</button>
                  </form>
                  </div>
              </div>
          </div>        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
