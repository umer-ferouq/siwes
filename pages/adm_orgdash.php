<?php
     $title = "Org Profile";
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
            <div class=""><h2>Organisation Profile</h2></div>
     <div class="col-sm-2"></div>

    <div class="col-sm-8 col-md-8">
                <div class="" id="profile">           
                <img src="../resource/images/profile-img.png"  alt="logo">
                </div>
                <h3 class="">BRIATEK COMPUTERS INSTITUTE</h3>
                <P class="">Gombe Local Government Shopping Complex, Gombe<br>Briatek.org.ng</P>    
        
                <div class="magin">                  
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" href="#collapse1"><span class="lead"><a href="#" ><i class="fa fa-user"></i>Full Profile</a></span> </button>
                </div>
        <div id="collapse1" class="collapse">
                <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#info"><em class="lead">Organisation Information</em></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#verify"><em class="lead"></em></a> 
            </li> -->
            
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
            <!-- <div id="verify" class="tab-pane"><br>
            <form class="" action="">
                <div class="row">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="verify">Verify Institution</label>
                            <select class="form-control" name="verify">
                            <option>Verified</option>
                            <option>Unverified</option>
                            </select>
                        </div>  
                            <button type="submit" class="btn btn-info button-full">Verify</button>
                    </div>
                </div>
            
            </form>
                  <hr />
            </div> -->
             
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
                            25
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
                            <span>Unaccepted Student</span>
                        </div>
                        <div class="panel-body">
                            1
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-warning button-full">Full List</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                            <span>Total Student Trained</span>
                        </div>
                        <div class="panel-body">
                            50
                        </div>
                        <div class="panel-footer">
                            <a><button type="button" class="btn btn-warning button-full">View All</button></a>
                        </div>
                        </div>
                    </div>
         
                </div>
            </div>
            <!-- Geoloc -->
            <div class="well">
            <p>Geo location goes here</p>
            </div>

<!-- closed col8 -->
    </div>
</div>
    <!-- FOOTER -->
<?php 
    include '../inc/footer.php'; 
?>