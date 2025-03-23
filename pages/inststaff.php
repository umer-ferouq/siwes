<?php
     $title = "Institution";
     require '../inc/indexheader.php';
     
?>
          <!-- nav content goes here -->
          <li><a href="admin.php">Dashboard</a></li>
        <li><a href="admstaff.php">Staff</a></li>
        <li><a href="admstd.php">Student</a></li>
        <li><a href="visit.php">Visits</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </div> 
  </div>
        
</nav>


  <div class="container">
             <div class="col-sm-3 col-md-3"></div>
             <h3>Institution Staff</h3>
             <div class="col-sm-2 col-md-2"></div>
             
             <div class="col-sm-8">
             <?php if(isset($_POST['appoint'])){
                        echo $msg;
                        }elseif(isset($_POST['addhim'])){
                          echo $msg2;
                        }
                        ?>
             <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#saddr"><em class="lead">Add Staff</em></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile"><em class="lead">View Profile</em></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#visit"><em class="lead">Schedule Visit</em></a> 
            </li>
        
        </ul>
        
                <!-- Tab panes -->
                    <div id="saddr" class="tab-pane fade active"><br>
                    <div class="well">
                 <div class="well-header bg-success">
                     <h3>Add Staff</h3>
                 </div>
                 <div class="well-body">
                
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                 <div class="row">
                   <div class="col-sm-6">
                       <div class="form-group">
                           <label for="sname">Staff Name</label>
                           <input type="text" class="form-control" placeholder="Staff Name" name="sname">
                         </div>

                          <div class="form-group">
                             <label for="phone">Phone Number</label>
                             <input type="text" class="form-control" name="sphone" placeholder="080-111-33-222">
                          </div>
                          <div class="form-group">
                         <label for="gender">Gender</label><br>
                         <label class="radio-inline"><input type="radio" name="sgender" value="Male">Male</label>
                        <label class="radio-inline"><input type="radio" name="sgender" value="Female">Female</label>
                       </div>
                     
                   </div>
                   
                   <div class="col-sm-6">
                   <div class="form-group">
                             <label for="email">Email Address</label>
                             <input type="email" class="form-control" name="semail" placeholder="abcd@siwes.com">
                           </div>
                     <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" name="srole">
                         <option>Staff</option>
                         <option>HOD</option>
                    </select>
                     </div>
                     <div class="form-group">
                      <label for="role">.</label>
                     <button type="submit" name="appoint" class=" form-control btn btn-info button-full">Add Staff</button>
                   </div>    
                   </div>
                  
                 </div>
               </form>
               <!-- well footer -->
               </div>
               </div>
                          <hr>
       
                        </div>


                        <div id="visit" class="tab-pane fade active"><br>
                        <h3>Staff Visit Schedule</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Staff Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>Visit Date</th>
                    <th>Profile</th>
                    <th>Remark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Umar Faruk</td>
                    <td>umar@gmail.com</td>
                    <td>0903223982</td>
                    <td>Gombe</td>
                    <td>10/11/2021</td>
                    <td><input type="button" class="btn btn-info" value="Enter"></td>
                    <td>Pending</td>
                  </tr>
                
                </tbody>
              </table>
                    <hr>
       
                </div>
                    
                </div>

      
       </div>
             
     </div>
</div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
