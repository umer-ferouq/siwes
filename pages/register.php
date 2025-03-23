<?php 
  session_start();
     $title = "register";
     require '../inc/indexheader.php'; 
    include '../config/config.php';
    
   $msg = "";

   if(isset($_POST['register'])  && !empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['state'])
   && !empty($_POST['placetype'])  && !empty($_POST['website'])  && !empty($_POST['email'])  && !empty($_POST['pass'])  && !empty($_POST['cpass'])
   ){

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

       $name = test_input(mysqli_real_escape_string($conn, $_POST['name']));
       $address = test_input(mysqli_real_escape_string($conn, $_POST['address']));
       $state = test_input(mysqli_real_escape_string($conn, $_POST['state']));
       $phone = test_input(mysqli_real_escape_string($conn, $_POST['phone']));
       $type = test_input(mysqli_real_escape_string($conn, $_POST['placetype']));
       $site = test_input(mysqli_real_escape_string($conn, $_POST['website']));
       $email = test_input(mysqli_real_escape_string($conn, $_POST['email']));
       $desc = test_input(mysqli_real_escape_string($conn, $_POST['desc']));
       $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
       $cpass = mysqli_real_escape_string($conn, md5($_POST['cpass']));
       
       $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM place_tbl WHERE email='$email'"));


       if ($pass !== $cpass){
         echo "<script>alert('Password did not match');</script>";
       } elseif ($check_email > 0) {
        echo "<script>alert('Email already exist');</script>";
       }
       else {
         $sql = "INSERT INTO `place_tbl`(`name`, `address`, `state`, `phone`, `website`, `type`,`email`, `desc`, `password`) 
         VALUES ('$name', '$address', '$state', '$phone', '$site', '$type' , '$email', '$desc', '$pass')";
         $result = mysqli_query($conn, $sql);

         echo "<script>alert('Registration Successful');</script>";
        
       }
         
   }
 
?>

          <!-- MENU LINKS -->

          <li><a href="index.php" class="smoothScroll">Home</a></li>
                    <li><a href="index.php" class="smoothScroll">Services</a></li>
                    <li><a href="index.php" class="smoothScroll">Training</a></li>
                    <li><a href="index.php" class="smoothScroll">About Us</a></li>
                    <li><a href="index.php" class="smoothScroll">Contact</a></li>
                    <li class="login-btn"><a href="login.php"><i class="fa fa-login"></i>Log in</a></li>
                    <li class="appointment-btn"><a href="register.php"><i class="fa fa-register"></i>Register</a></li>

   </ul>
  </div>
 </div>
 <!-- ?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->
</nav>
   <div class="container-fluid backgroun">
     <div class="container">
          <div class="col-sm-2"></div>
  
          <div class="col-sm-8">
          <?php if(isset($_POST['create'])){
                        echo $msg;
                        }
                        ?>
                <h3 class="login-caption-text">join SIWES Web</h3>
          <form action="#" method="POST">
          <div class="form-group">
             <label for="name">Institution Name:</label>
             <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
             </div>
           <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Institution address" name="address" required>
          </div>
          <div class="form-group">
            <label for="phone">Tel Number:</label>
            <input type="tel" class="form-control" id="phone" placeholder="080-2323-1111" name="phone" required>
            </div>
            <div class="form-group">
              <label for="Email">Email address</label>
              <input type="email" class="form-control" placeholder="info@inst.com" id="user" name="email" required>
            </div>
           <div class="form-group">
            <label for="state">State:</label>
              <select class="form-control" name="state" required>
                <option value="Abia State">Abia State</option>
                <option value="Adamawa State">Adamawa State</option>
                <option value="Bauchi State">Bauchi State</option>
                <option value="Gombe State">Gombe State</option>
              </select>          
            </div>
            <div class="form-check form-group">
               <label for="inst">Institution Type</label><br>
 
                <select  class="form-control" name="placetype">  
                    <option value="Institution" checked>Institution</option>
                    <option value="Industry">Industry</option>
                </select>
             </div>
             <div class="form-group">
               <label for="website">Website:</label>
               <input type="text" class="form-control" id="website" placeholder="www.placename.com" name="website" required>
              </div>
             <!-- <div class="form-group">
               <label for="geoloc">Location:</label>
               <input type="text" class="form-control" placeholder="" name="geoloc" required>
              </div> -->
             <div class="form-group">
               <label for="desc">Description:</label>
               <input type="text" class="form-control" id="desc" placeholder="Write something" name="desc">
              </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" placeholder="Password" class="form-control" id="Password" name="pass" required>
              </div>
            <div class="form-group">
               <label for="cpwd">Confirm Password:</label>
               <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="cpass" required>
              </div>
              <p>Make sure it's at least 15 characters OR at least 8 charecters including a number and a lowercase letter.<a href="#">Learn more.</a></p>
             <div class="form-group form-check">
             </div>
             <button class="btn btn-danger button-full" type="submit" name="register">Create account</button>
            
          </form>
  
               <p>By creating an account, you agree to the <a href="#">Terms of Service.</a>
               For more information about SIWES Web's privacy practices, see the <a href="#">SIWES Web Privacy Statement.</a>
               We'll occationally send you account-related emails.</p>
          
          <!-- include this functionality later -->
          <!-- <div class="new">
          <p class="mag bit">Staff or Student?<a href="refcode.php">Create individual Account.</a></p>
          </div>   -->
          </div>

          </div>
           
      </div>
      <hr>
 </div>
    <!-- FOOTER -->
    <?php 
          require "../inc/footer.php"; 
          mysqli_close($conn);
     ?>
