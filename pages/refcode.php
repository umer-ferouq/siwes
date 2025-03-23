<?php 
     $title = "register";
     require '../inc/indexheader.php'; 
    include '../config/config.php';
    
    $codeErr = $msg = "";

    if(isset($_POST['sendit'])  && !empty($_POST['refcode'])){

        $code = test_input($_POST['namrefcodee']);
        if (!preg_match("[0-9]",$code)) {
          $nameErr = "Invalid referrence Code";  }

        if(empty($code)){
          $msg = "<div class='alert alert-danger'>Field must not be empty</div>";
      
          }else{
               $sql_insert="UPDATE TABLE student_tbl (patient_name, home_address, phone_number, email, password, gender, dob) VALUES ('$name', '$addr', '$phone','$email', '$pass', '$gender', '$dob') WHERE STD_REF = $code";
               $result=mysqli_query($connection,$sql_insert);
               header('location:login.php');
          }
     
     }
     function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
 
?>

          <!-- MENU LINKS -->

          <li><a href="index.php" class="smoothScroll">Home</a></li>
                    <li><a href="index.php" class="smoothScroll">Services</a></li>
                    <li><a href="index.php" class="smoothScroll">Training</a></li>
                    <li><a href="index.php" class="smoothScroll">About Us</a></li>
                    <li><a href="index.php" class="smoothScroll">Contact</a></li>
   </ul>
  </div>
 </div>

</nav>
   <div class="container-fluid backgroun">
     <div class="container">
          <div class="col-sm-2"></div>
  
          <div class="col-sm-8">
              <?php echo $msg; ?>
                <h3 class="login-caption-text">New Student or Staff? join SIWES Web</h3>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="form-group">
            <label for="ref">Enter Ref code:</label>
            <input type="text" class="form-control" placeholder="00-000-111" name="refcode" required>
             </div>
             <button class="btn btn-info button-full" type="submit" name="sendit">Continue</button>
            
          </form> 
          </div>
           
      </div>
      <hr>
 </div>
    <!-- FOOTER -->
    <?php 
          require "../inc/footer.php"; 
          mysqli_close($connection);
     ?>
