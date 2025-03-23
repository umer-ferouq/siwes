<?php
     $title = "Student Dashboard";
     require '../inc/indexheader.php';
     
?>
          <!-- nav content goes here -->
          <li class="active"><a href="Student.php">Dashboard</a></li>
                       <li><a href="stdinst.php">Institutions</a></li>
                       <li><a href="stdorg.php">Organisations</a></li>
                       <li><a href="super.php">Supervision</a></li>
      </ul>
    </div> 
  </div>
        
</nav>

<div class="container">
            <div class=""><h2>Your Organisation Profile</h2></div>
     <div class="col-sm-2"></div>

     <div class="col-sm-8">
          <div class="" id="profile">           
               <img src="../resource/images/profile-img.png"  alt="logo">
           </div>
           <h3 class="">Organisation Name</h3>
  
           <h5 class="lead">
              <p>Organisation Description
              <br>website</p>
          </h5>
                <div class="magin">
                <button type="button" class="btn btn-info btn-block"><span class="lead"><a href="changeorg.php"><i class="fa fa-edit"></i>Change Organisation</a></span> </button>
                </div>

                <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#bio"><em class="lead">Organisation Infomation</em></a>
            </li>
        </ul>
        
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="bio" class="tab-pane active"><br>
                        <div class="btn-block">
                        orggansation address
                            <!-- <button type="button" class="btn btn-block btn-default">GRA Gombe Along Buhari Estate</button> -->
                           </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">08107161481</button>
                          </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">info@org.com</button>
                         </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Geoloc</button>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Gombe State</button>
                          </div>
                          <div class="form-group">
                            organisation description
                          </div>
                          <hr />
                        </div>
                </div>
                <h3>List Of Students</h3>
    <form action="" >
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Record" name="search">
          <div class="input-group-btn">
            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    <table class="table">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Institution</th>
          <th>Reg Number</th>
          <th>Department</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Kabir Alhassan</td>
          <td>gsu</td>
          <td>ug12/dded/2321</td>
          <!-- <td><input type="button" class="btn btn-info" value="View" name="view"></td> -->
          <td>Computer Science</td>  
          <td>kabir@hm.com</td>  
          <td>09033242885</td>  
          <td>Pending</td>    
        </tr>  
        <tr>
          <td>Kabir Alhassan</td>
          <td>gsu</td>
          <td>ug12/dded/2321</td>
          <td>Computer Science</td>  
          <td>kabir@hm.com</td>  
          <td>09033242885</td>  
          <td>Pending</td>    
        </tr>  
        <tr>
          <td>Kabir Alhassan</td>
          <td>gsu</td>
          <td>ug12/dded/2321</td>
          <td>Computer Science</td>  
          <td>kabir@hm.com</td>  
          <td>09033242885</td>  
          <td>Accepted</td>    
        </tr>  
       
      </tbody>
    </table>
      
      </div>
</div> 
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
    
?>
