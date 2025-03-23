<?php
     $title = "Industry";
     require '../inc/indexheader.php';     
?>
          <!-- nav content goes here -->
        <li><a href="admin.php">Dashboard</a></li>
        <li><a href="admstaff.php">Staff</a></li>
        <li><a href="admstd.php">Student list</a></li>
        <li><a href="visit.php">Visits</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li class="appointment-btn"><a href="profile.php"><i class="fa fa-register"></i>Profile</a></li>

      </ul>
    </div> 
  </div>
        
</nav>

<div class="container-fluid index-background">

  <div class="container">
             <div class="col-sm-3 col-md-3"></div>
             <h3>University Dashboard</h3>
             
        <div class="row"> 
             
             <div class="col-md-8 panel">
                  <h3>Welcome Back GSU Admin</h3>
                  <p>some notes</p>
                  <button class="bg-info"><a href="staff.php">Add Staff</a></button>
             </div>
             <div class="col-md-4 panel">
                  <h5>Profile</h5>
                  <img src="../resource/images/profile-img.png" class="img-responsive" style="height:80px; width:50px" alt="">
                  <p>Gombe State University</p>
                  <a href="profile.php"><input type="button" class="btn btn-info" value="View Profile"></a>
             </div>
        </div>
        <div class="row">
        <div class="well">
                <div class="row well-body">
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                            <span>Current Student</span>
                        </div>
                        <div class="panel-body">
                            0
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-warning button-full">View</button></a>
                        </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                            <span>Pending Approval</span>
                        </div>
                        <div class="panel-body">
                            0
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-warning button-full">Full List</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                            <span>Total Institutions</span>
                        </div>
                        <div class="panel-body">
                            0
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-warning button-full">View All</button></a>
                        </div>
                        </div>
                    </div>
         
                </div>
            </div>
            <hr>
        
        </div>
            
        <div class="row">
          
        </div>
        <div class="row">
            <div class="col-sm-12">
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
            </div>
             
      </div>
</div></div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
