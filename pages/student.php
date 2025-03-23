<?php
     $title = "Student Dashboard";
     require '../inc/indexheader.php';
     include '../config/config.php';
   
?>
          <!-- nav content goes here -->
          <li class="active"><a href="#">Dashboard</a></li>
          <li><a  data-toggle="modal" data-target="#addsport">Select place of IT</a></li>
          <li><a data-toggle="modal" data-target="#industry">Industry</a></li>
          <li><a href="#">Supervision</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li class="appointment-btn"><a href="profile.php"><i class="fa fa-register"></i>Profile</a></li>
      </ul>
    </div> 
  </div>
      
</nav>
<div class="container-fluid index-background">
<div class="container">
  <h3>Student Dashboard</h3>
  <div class="row">
      <div class="col-md-6 panel">
        <h3>Welcome Back Umar Bello</h3>
        <p>Institution name and basic info here</p>
      </div>
  </div>
<div class="row">
    
  <div class="col-sm-6">
  <table class="table">
              <thead>
                <tr>
                  <th>S/n</th>
                  <th>1st Month</th>
                  <th>2nd Month</th>
                  <th>3rd Month</th>
                  <th>4th Month</th>
                  <th>5th Month</th>
                  <th>6th Month</th>
                  <th>Remark</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td><i class="fa fa-user"></i></td>
                </tr> 
              </tbody>
            </table>
  </div>
</div>
    <div class="col-sm-6">
    
    <!-- Modal for selecting place of siwes-->
<div class="modal fade" id="addsport" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <span class="text">Select place of training</span>
      </div>
      <div class="modal-body">
      <div class="activity">
              <div class="title">
              </div>
              <!-- <form method="post" action="createadmin.php"> -->
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
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="form-group">
                  <label for="state">State</label>
                  <select class="form-control" name="state">
                            <?php
                            // include("includes/conn.php");
                            // $gt = $_SESSION['user_game'];
                                      $state = mysqli_query($conn, "SELECT DISTINCT `state` FROM `place_tbl` WHERE `type`= 'Industry'");
                                    while($row = mysqli_fetch_array($state)){
                                      echo '<option value='.$row["state"].'>'.$row["state"].'</option>';
                                    }
                                  mysqli_free_result($state);
                                  ?>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="industry">Industry:</label>
                            <select class="form-control" name="org">
                            <?php
                            include("includes/conn.php");
                            // $gt = $_SESSION['user_game'];
                                      $team = mysqli_query($conn, "SELECT `id`, `name`, state FROM `place_tbl`");
                                    while($row = mysqli_fetch_array($team)){
                                      echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
                                    }
                                  mysqli_free_result($team);
                                  ?>
                            </select>
                        </div>
                          <!-- </div>    -->
                        <div class="">
                          <button type="submit" name="appoint" class="btn btn-danger button-full">Choose as Place of IT</button>
                        </div> 
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
<div class="modal fade" id="industry" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <span class="text">View place of training</span>
      </div>
      <div class="modal-body">
      <div class="activity">
              <div class="title">
              </div>
              <!-- <form method="post" action="createadmin.php"> -->
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
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                         <div class="form-group">
                            <label for="industry">Industry:</label>
                            <select class="form-control" name="org">
                            <?php
                            include("includes/conn.php");
                            // $gt = $_SESSION['user_game'];
                                      $team = mysqli_query($conn, "SELECT `id`, `name`, state FROM `place_tbl`");
                                    while($row = mysqli_fetch_array($team)){
                                      echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
                                    }
                                  mysqli_free_result($team);
                                  ?>
                            </select>
                        </div>
                          <!-- </div>    -->
                        <div class="">
                          <button type="submit" name="view" class="btn btn-danger button-full">View Place</button>
                        </div> 
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
  </div>
 
</div>
</div>

    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>