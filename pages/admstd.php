<?php
     $title = "SIWES Student";
     require '../inc/indexheader.php';
     include '../config/config.php';
     
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
  <div class=""><h3>SIWES Student</h3></div>
             <div class="col-sm-2 col-md-2"></div>
             <div class="col-sm-8">
             <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#student"><em class="lead">Student</em></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mobil"><em class="lead">Mobilisation List</em></a> 
            </li>
        
        </ul>
        
                <!-- Tab panes -->
        <div class="tab-content">
                    <div id="student" class="tab-pane active">
                    <div class="well">
                <div class="row well-body">
                    <div class="col-sm-4">
                       <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Current Student</span>
                        </div>
                        <div class="panel-body">
                        <?php 
                                $sql = "SELECT count(*) as curstd FROM std_tbl WHERE status='Approved'";
                                $resu = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($resu);
                                echo $data['curstd'];  
                                    mysqli_free_result($resu);
                            ?>                        
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">View</button></a>
                        </div>
                       </div>

                    </div>
                    <!--  -->
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Trained Student</span>
                        </div>
                        <div class="panel-body">
                        <?php 
                                $sql = "SELECT count(*) as curstd FROM std_tbl WHERE status='Approved'";
                                $resu = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($resu);
                                echo $data['curstd'];  
                                    mysqli_free_result($resu);
                            ?>
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">View</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                        <div class="panel-heading">
                            <span>Total Student</span>
                        </div>
                        <div class="panel-body">
                        <?php 
                                $sql = "SELECT count(*) as curstd FROM std_tbl WHERE status='Approved'";
                                $resu = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($resu);
                                echo $data['curstd'];  
                                    mysqli_free_result($resu);
                            ?>
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-danger button-full">View</button></a>
                        </div>
                        </div>
                    </div>
         
        </div>
             </div><hr>
<!-- 
        <form class="" action="">
          <div class="form-group">
              <label for="email">Enter Student Email</label>
              <input type="text" class="form-control" id="pid" placeholder="student@email.com" name="pid">
            </div>
            <button type="submit" class="btn btn-danger button-full">View Profile</button>
        </form>
                          <hr /> -->
                  <table class="table">
                    <thead>
                        <tr>
                        <th>S/N</th>
                        <th>Student Name</th>
                        <th>Inst Name</th>
                        <th>Org Name</th>
                        <th>Email</th>
                        <th>Remove</th>
                        <th>Profile</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <?php
                    $selquery ="SELECT std_id,std_name,inst_id,ind_id,email,status FROM `std_tbl` ORDER BY std_name ASC LIMIT 5";

                    //bind connection with query
                    $resl = mysqli_query($conn, $selquery);
                    //loop through the table
                    $j = 0;
                    while($row = mysqli_fetch_assoc($resl)){
                    $j++;
                    $aid = $row['std_id'];
                    
                    ?>
                    <tbody>
                    <tr>
                        <td class="center"> <?php echo $j;?></td>
                        <td class="center"> <?php echo $row['std_name'] ?></td>
                        <td class="center"> <?php echo $row['inst_id'] ?></td>
                        <td class="center"> <?php echo $row['ind_id'] ?></td>
                        <td class="center"> <?php echo $row['email'] ?></td>
                        <td><a href="<?php echo 'remove.php?id='.$aid; ?>"><input type="button" class="btn btn-warning" value="Remove" name="rem"></a></td>
                        <td><input type="button" class="btn btn-info" value="Profile" name="pro"></td>
                        <td><input type="button" class="btn btn-info" value="<?php echo $row['status'] ?>" name="stat"></td>
                        </tr>
                    <?php }
                        mysqli_free_result($resl);
                    ?> 
                    </tbody>
                    </table>
                    <hr>
                        </div>
                    <div id="mobil" class="tab-pane fade">
                            <table class="table">
        <thead>
            <tr>
            <th>S/N</th>
            <th>Student Name</th>
            <th>Institution</th>
            <th>Registration No</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Profile</th>
            <th>Approve</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Umar Bello</td>
            <td>GSU</td>
            <td>ug17/sccs/1127</td>
            <td>umar@hm.com</td>  
            <td>09033242885</td>
            <td><input type="button" class="btn btn-info" value="Profile" name="pro"></td>
            <td><input type="button" class="btn btn-danger" value="Accept" name="acp"></td>
            </tr>  
            <tr>
            <td>2</td>
            <td>Dauda musa</td>
            <td>BUK</td>
            <td>bg17/sccs/1127</td>
            <td>umar@hm.com</td>  
            <td>09033242885</td>
            <td><input type="button" class="btn btn-info" value="Profile" name="pro"></td>
            <td><input type="button" class="btn btn-danger" value="Accept" name="acp"></td>
            </tr>
        
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
