<?php
    $title = "SIWES Institution";
    require '../inc/indexheader.php';
    include '../config/config.php';

    $msg = "";
 
    if (isset($_POST['search'])  && !empty($_POST['email'])){
 
        $mail = mysqli_real_escape_string($conn, $_POST["email"]);

        $sql="SELECT id,email,type FROM place_tbl WHERE email = '$mail' && type='Institution'";
        $result = mysqli_query($conn, $sql);
            // start

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $d = $row['id'];
        
                    mysqli_free_result($result);
                    header("Location: view.php?id=$d;");
                
              }else{
                //   header("Location: adminst.php");
                  $msg = "<div class='alert alert-warning mag'>No Result Found</div>";
              }
            //   finish
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
  <div class=""><h3>SIWES Institutions</h3></div>
 
             <div class="col-sm-2 col-md-2"></div>
        <div class="col-sm-8">
        <div class="well">
                <div class="row well-body">
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Current Institutions</span>
                        </div>
                        <div class="panel-body">
                            <?php 
                                $sql = "SELECT count(*) as curinst FROM place_tbl WHERE type='Institution' && status='Approved'";
                                $resu = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($resu);
                                echo $data['curinst'];  
                                    mysqli_free_result($resu);
                            ?>
                        </div>
                        <!-- <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">View</button></a>
                        </div> -->
                        </div>
                    </div>
                    
                    <!--  -->
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Pending Approval</span>
                        </div>
                        <div class="panel-body">
                            <?php 
                                $sql = "SELECT count(*) as peninst FROM place_tbl WHERE type='Institution' && status='Pending'";
                                $resul = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($resul);
                                echo $data['peninst'];  
                                    mysqli_free_result($resul);
                            ?>                        
                        </div>
                        <!-- <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">Full List</button></a>
                        </div> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Total Institutions</span>
                        </div>
                        <div class="panel-body">
                        <?php 
                            $sql = "SELECT count(*) as allinst FROM place_tbl WHERE type='Institution'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($result);
                            echo $data['allinst'];  
                                mysqli_free_result($result);?>
                        </div>
                        <!-- <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">View All</button></a>
                        </div> -->
                        </div>
                    </div>
         
                </div>
            </div>
            <?php  
                    //   if(isset($_POST['search'])){
                    //     echo $msg;
                    //   }
                        ?>
            <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <div class="form-group">
                    <label for="email">Enter Institution Email</label>
                    <input type="email" class="form-control" id="email" placeholder="info@inst.edu" name="email">
                </div>
                    <button type="submit" name="search" class="btn btn-danger button-full">View Profile</button>
                        -- to adm_insdash .php whe submitted --
            </form> -->
            
            <hr>
            <table class="table-responsive">
                    <thead>
                        <tr>
                        <th>S/N</th>
                        <th>institution Name</th>
                        <th>Address</th>
                        <th>Website</th>
                        <th>Profile</th>
                        <th>Accept</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <?php

    $selquery ="SELECT * FROM `place_tbl` WHERE type = 'Institution' ORDER BY name ASC";

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
                        <td class="center"> <?php echo $row['address'] ?></td>
                        <td class="center"> <?php echo $row['website'] ?></td>
                        <td><a href="<?php echo 'read.php?iid='.$aid; ?>"><span class="fa fa-eye btn btn-info"></span></a></td>
                        <td><a href="<?php echo 'accept.php?id='.$aid; ?>"><span class="fa fa-check-square-o btn btn-success"></span></a></a></td>
                        <td><input type="button" class="btn btn-danger" value="<?php echo $row['status'] ?>" name="stat"></td>
                        </tr>
                        <?php }
                        mysqli_free_result($resl);
                    ?>
                    
                    </tbody>
                    </table>
                    <hr>
    </div>
</div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
