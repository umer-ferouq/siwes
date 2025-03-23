<?php
     $title = "Student Profile";
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
            <div class=""><h2>Student Profile</h2></div>
     <div class="col-sm-2"></div>

    <div class="col-sm-8 col-md-8">
                <div class="" id="profile">           
                <img src="../resource/images/profile-img.png"  alt="logo">
                </div>
                <h3 class="">STUDENT NAME</h3>
                <P class="">Student address<br>Department<br>Reg No</P>    
        
                <div class="magin">                  
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" href="#collapse1"><span class="lead"><a href="#" ><i class="fa fa-user"></i> Full Profile</a></span> </button>
                </div>
        <div id="collapse1" class="collapse">
                <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#info"><em class="lead">Student Information</em></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#verify"><em class="lead">Bank Details</em></a> 
            </li> -->
            
        </ul>
                <!-- Tab panes -->
        <div class="tab-content">
                <div id="info" class="tab-pane active"><br>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Institution name</button>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Faculty name</button>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">place of it</button>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">08107161481</button>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Age</button>
                          </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">student@mail.com</button>
                         </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Gender</button>
                         </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Gombe State</button>
                         </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Date of commencement</button>
                         </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Date of completion</button>
                         </div>
                         <div class="form-group">
                            <button type="button" class="btn btn-block btn-default">Accepted</button>
                         </div>
                  <hr />
                </div>
            <div id="verify" class="tab-pane">
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-default">Bank Name</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-default">Account Number</button>
                    </div>
                  <hr />
            </div>
             
        </div>
 <!-- closed tab-content -->     

      </div>
       <!-- closed collapse -->     
            <!-- VISIT DETAILS -->
            <table class="table">
      <thead>
        <tr>
          <th>S/n</th>
          <th>First Month</th>
          <th>Second Month</th>
          <th>Third Month</th>
          <th>Fourth Month</th>
          <th>Fifth Month</th>
          <th>Sixth Month</th>
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
<!-- closed col8 -->
    </div>
</div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
?>