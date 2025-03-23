<?php 
    $title = "SIWES Staff";
    require '../inc/indexheader.php';
    include '../config/config.php';

    $msg = $msg2 = "";

    if (isset($_POST['addadmin'])  && !empty($_POST['aname']) && !empty($_POST['aemail']) && !empty($_POST['apass']) && !empty($_POST['aphone'])){

        $adminname = mysqli_real_escape_string($conn, $_POST['aname']);
        $adminemail = mysqli_real_escape_string($conn, $_POST["aemail"]);
        $adminpass = mysqli_real_escape_string($conn, md5($_POST["apass"]));
        $adminphone = mysqli_real_escape_string($conn, $_POST["aphone"]);

        $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT admin_email FROM admin WHERE admin_email='$adminemail'"));
      
        if (empty($adminname) || empty($adminemail) || empty($adminpass) || empty($adminphone)){
              $msg2 = "<div class='alert alert-danger mag'>Field must not be empty</div>";
            
            }elseif ($check_email > 0) {
              $msg2 = "<div class='alert alert-info mag'>Email already exist</div>";
            }
            else{
              $sqlq="INSERT INTO admin(name, phone, admin_email, admin_password, role) VALUES ('$adminname', '$adminphone', '$adminemail', '$adminpass', 'Admin')";
              $result=mysqli_query($conn,$sqlq);
              $msg2 = "<div class='alert alert-info mag'>Admin added successfully</div>";
            }
      }else{
        $msg2 = "<div class='alert alert-danger mag'>Fields can not be empty</div>";
 }
     
    if(isset($_POST['appoint'])){

        $staffname = mysqli_real_escape_string($conn, $_POST['sname']);
        $staffemail = mysqli_real_escape_string($conn, $_POST["semail"]);
        $staffgender = mysqli_real_escape_string($conn, $_POST["sgender"]);
        $staffphone = mysqli_real_escape_string($conn, $_POST["sphone"]);
        $staffpass = mysqli_real_escape_string($conn, md5($_POST["pass"]));

        $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT staff_email FROM staff_tb WHERE staff_email='$staffemail'"));

          if (empty($staffname) || empty($staffemail) || empty($staffgender) ){
              $msg = "<div class='alert alert-danger mag'>Fields must not be empty</div>";
            
            }elseif ($check_email > 0) {
              $msg = "<div class='alert alert-info mag'>Email already exist</div>";
            }
            else{
              $sql_insert="INSERT INTO staff_tb(staff_name, staff_phone, staff_email, password, status, role, place_id, gender) VALUES ('$staffname', '$staffphone', '$staffemail', '$staffpass', '1','2','1', '$staffgender')";
              $result=mysqli_query($conn,$sql_insert);
              $msg = "<div class='alert alert-info mag'>Staff added successfully</div>";
            }
    }else{
        $msg = "<div class='alert alert-danger mag'>Fields must not be empty</div>";
    }
  
?>
          <!-- nav content goes here -->
          <li><a href="admin.php">Dashboard</a></li>
                       <li><a href="admstaff.php">Staff</a></li>
                       <li><a href="adminst.php">Institutions</a></li>
                       <li><a href="admorg.php">Organisations</a></li>
                       <li><a href="admstd.php">Student</a></li>
                       <!-- <li><a href="visit.php">Visits</a></li> -->
                       <li><a href="logout.php">Logout</a></li>
                       <li class="appointment-btn"><a href="admin.php#profile"><i class="fa fa-register"></i>Profile</a></li>

      </ul>
    </div> 
  </div>
        
</nav>


  <div class="container">
  
             <div class="col-sm-2 col-md-2"></div>
             
             <div class="col-sm-8">
             <?php  
                      if(isset($_POST['addadmin'])){
                        echo $msg2;
                      }
                        ?>
            <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#admin"><em class="lead">Admins</em></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#staff"><em class="lead">Staff</em></a> 
            </li>
        
            </ul> 
        
                <!-- Tab panes -->
                 <div class="tab-content">
                    <div id="admin" class="tab-pane active"><br>
               <div class="well">
                 <div class="well-header bg-danger">
                     <h3>Add  Admin</h3>
                 </div>
                 <div class="well-body">
                
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                 <div class="row">
                       <div class="form-group">
                           <label for="aname">Admin Name</label>
                           <input type="text" class="form-control" id="name" placeholder="Admin Name" name="aname">
                         </div>
                         <div class="form-group">
                             <label for="email">Email Address</label>
                             <input type="email" class="form-control" name="aemail" placeholder="abcd@siwes.com" id="aemail">
                           </div>
                         <div class="form-group">
                             <label for="phone">Phone Number</label>
                             <input type="text" class="form-control" name="aphone" placeholder="080-111-22-333" >
                           </div>                   
                          <div class="form-group">
                             <label for="email">Password</label>
                             <input type="password" class="form-control" name="apass" id="apass">
                          </div>
                          <div class="form-group">
                            <label for="role">.</label>
                          <button type="submit" name="addadmin" class="btn btn-danger button-full">Add Admin</button>
                          </div>   
                   
                 </div>
               </form>
               <!-- well footer -->
               </div>
               </div>
                          <hr />
                  <table class="table">
                    <thead>
                        <tr>
                        <th>S/N</th>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
<?php

    $selquery ="SELECT admin_id, name, admin_email, phone FROM `admin` ORDER BY name ASC";

      //bind connection with query
    $resl = mysqli_query($conn, $selquery);
      //loop through the table
    $j = 0;
    while($row = mysqli_fetch_assoc($resl)){
      $j++;
      $aid = $row['admin_id'];
      
?>
          <tbody>
          <tr class="" >
      <td class="center"> <?php echo $j;?></td>
      <td class="center"> <?php echo $row['name'] ?></td>
      <td class="center"> <?php echo $row['admin_email'] ?></td>
      <td class="center"> <?php echo $row['phone'] ?></td>
      <td><a href="<?php echo 'remove.php?id='.$aid; ?>"><input type="button" class="btn btn-warning" value="Remove" name="rem"></a></td>
          </tr>
<?php
 }
    mysqli_free_result($resl);
?>

                    </tbody>
                    </table>
                    <hr>
                        </div>
                        <!-- fade to active -->
                    <div id="staff" class="tab-pane"><br>
                    <div class="well">
                 <div class="well-header bg-danger">
                     <h3>Add  Staff</h3>
                 </div>
                 <div class="well-body">
                
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                 <div class="row">
                       <div class="form-group">
                           <label for="sname">Staff Name</label>
                           <input type="text" class="form-control" placeholder="Staff Name" name="sname">
                         </div>

                          <div class="form-group">
                             <label for="phone">Phone Number</label>
                             <input type="text" class="form-control" name="sphone" placeholder="080-111-33-222">
                          </div>                   
                        <div class="form-group">
                             <label for="email">Email Address</label>
                             <input type="email" class="form-control" name="semail" placeholder="abcd@siwes.com">
                           </div>
                           <div class="form-group">
                             <label for="email">Password</label>
                             <input type="password" class="form-control" name="pass" id="pass">
                          </div>
                          <div class="form-group">
                         <label for="gender">Gender</label><br>
                         <label class="radio-inline"><input type="radio" name="sgender" value="Male" checked>Male</label>
                        <label class="radio-inline"><input type="radio" name="sgender" value="Female">Female</label>
                        </div>
                     <button type="submit" name="appoint" class=" form-control btn btn-danger button-full">Add Staff</button>
                   </div>
                  </form>
               <!-- well footer -->
               </div>
               </div>
               <div class=""><h3>SIWES Staff</h3></div>

                          <hr>
                            <table class="table-responsive">
        <thead>
            <tr>
            <th>S/N</th>
            <th>Staff Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Profile</th>
            <th>Remove</th>
            </tr>
        </thead>
<?php

    $query ="SELECT staff_id, staff_name, staff_email, staff_phone, gender,role FROM `staff_tb` WHERE role=2 ORDER BY staff_id ASC";

      //bind connection with query
    $res = mysqli_query($conn, $query);
      //loop through the table
    $j = 0;
    while($row = mysqli_fetch_assoc($res)){
      $j++;
      $id = $row['staff_id'];
?>        
        <tbody>
        <tr class="" >
                            <td class="center"> <?php echo $j;?></td>
                            <td class="center"> <?php echo $row['staff_name'] ?></td>
                            <td class="center"> <?php echo $row['staff_email'] ?></td>
                            <td class="center"> <?php echo $row['staff_phone'] ?></td>
                            <!-- <td class="center"> <?php //echo $row['role'] ?></td> -->
                            <td><a href="<?php echo 'show.php?id='.$id; ?>"><span class="fa fa-eye btn btn-info"></span></a></td>
                            <td><a href="<?php echo 'delete.php?id='.$id; ?>"><span class="fa fa-trash btn btn-danger"></span></a></td>
                        </tr>
                        <?php }
                         mysqli_free_result($res);
                         mysqli_close($conn);
                        ?>
        </tbody>
        </table><hr>
                        </div>
                    
                </div>

      
       </div>
             
     </div>
</div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
