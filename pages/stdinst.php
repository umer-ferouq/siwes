<?php
     $title = "Student Institution";
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
          <h2>Institution Profile</h2>
          <div class="col-sm-2"></div>

        <div class="col-sm-8">

              <div class="" id="profile">           
                    <img src="../resource/images/profile-img.png"  alt="logo">
                </div>
                
                <h3 class="">GOMBE STATE UNIVERSITY</h3>
                <P class="">Tudun wada gombe, gombe state<br>gsu.edu.ng</P>    
        
                <div class="magin">                  
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" href="#collapse1"><span class="lead"><a href="#" ><i class="fa fa-user"></i> Full Profile</a></span> </button>
                </div>

                  <div id="collapse1" class="collapse">
                  
                      <ul class="nav nav-tabs nav-justified" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#info"><em class="lead">Institution Information</em></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#mobil"><em class="lead">Mobilize</em></a> 
                          </li>
                          
                      </ul>
                              <!-- Tab panes -->
                      <div class="tab-content">
                              <div id="info" class="tab-pane active"><br>
                                        <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">08107161481</button>
                                        </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">info@org.com</button>
                                      </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">Gombe State</button>
                                      </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">Description of organisation</button>
                                      </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">Join date 5-11-2021</button>
                                      </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-block btn-default">Pending</button>
                                      </div>
                                <hr />
                              </div>
                          <div id="mobil" class="tab-pane">
                          <form class="" action="">
                              <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sname">Student Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Student Name" name="sname">
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Email Address</label>
                                          <input type="email" class="form-control" name="semail" placeholder="student@email.com" id="semail">
                                        </div>
                                  
                                </div>
                                
                                <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="dept">Department</label>
                                          <select class="form-control" name="dept">
                                          <option>Computer Science</option>
                                          <option>Physics </option>
                                          <option>Chemistry</option>
                                          <option>Mathematics</option>
                                          </select>
                                        </div>    
                                        <div class="form-group">
                                          <label for="email">Registration No</label>
                                          <input type="text" class="form-control" name="sreg" required>
                                        </div>    
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                          <label for="email">Institution</label>
                                          <select class="form-control" name="dept">
                                          <option>Computer Science</option>
                                          <select class="form-control" name="insti">
                                          <option>Gombe State University</option>
                                          </select>
                                          </select>
                                        </div>
                                  <div class="form-group">
                                      <label for="role">.</label>
                                      <button type="submit" name="appoint" class="btn btn-info button-full">Mobilize</button>
                                  </div>   
                                </div>
                                
                              </div>
                                  </div>
                              </div>
                          
                          </form>
                                <hr />
                          </div>
                          
                      </div>
                      <!-- closed tab-content -->     

                  </div>
                <!-- closed collapse -->     
                          <div class="well">
                              <div class="row well-body">
                                  <div class="col-sm-4">
                                      <div class="panel panel-success">
                                      <div class="panel-heading">
                                          <span>Current Student</span>
                                      </div>
                                      <div class="panel-body">
                                          100
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
                                          5
                                      </div>
                                      <div class="panel-footer">
                                          <a><button type="button" class="btn btn-warning button-full">Full List</button></a>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="panel panel-success">
                                      <div class="panel-heading">
                                          <span>Total Participated Student</span>
                                      </div>
                                      <div class="panel-body">
                                          200
                                      </div>
                                      <div class="panel-footer">
                                          <a><button type="button" class="btn btn-warning button-full">View All</button></a>
                                      </div>
                                      </div>
                                  </div>
                      
                              </div>
                          </div>
                  <!-- closed col8 -->
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
