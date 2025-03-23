<?php
  session_start();
    
    $title = "Login Page";
    require '../inc/indexheader.php'; 
    require '../config/config.php';
    $msg = "";

    if (!isset($_SESSION['email']) && !isset($_SESSION['id'])){   

      if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) { 
  
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
        $email = test_input($_POST['email']);
        $password = $_POST['password'];
        $hpassword = md5($password);
        // echo $hpassword;
        $role = test_input($_POST['role']);
        if (empty($email) && empty($password)) {
          $msg = "<div class='alert alert-warning mag'>Fields can't be empty</div>";
        }elseif ($role == "admin") {
          $sql = "SELECT * FROM admin WHERE admin_email = '$email'";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) === 1) {
          
                $row = mysqli_fetch_assoc($result);
                if ($row['admin_password'] === $hpassword) {
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['email'] = $row['admin_email'];
                  $_SESSION['id'] = $row['admin_id'];
                  $_SESSION['role'] = $row['role'];
        
                  header("Location: redirect.php");
                  }else{
                    $msg = "<div class='alert alert-warning mag'>Incorrect Password</div>";
                  }
              }
        }elseif ($role == "place") {
          $sql = "SELECT * FROM place_tbl WHERE email = '$email' AND password = '$password'";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) === 1) {
          
                $row = mysqli_fetch_assoc($result);
                if ($row['password'] === $password) {
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['role'] = $row['type'];
        
                  header("Location: redirect.php");
                  }else{
                    $msg = "<div class='alert alert-warning mag'>Incorrect Password</div>";
                  }
              }
        }elseif ($role == "staff"){

              $sql = "SELECT * FROM staff_tb WHERE staff_email = '$email' AND password = '$password'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) === 1) {
          
                $row = mysqli_fetch_assoc($result);
                if ($row['password'] === $password) {
                  $_SESSION['name'] = $row['staff_name'];
                  $_SESSION['email'] = $row['staff_email'];
                  $_SESSION['id'] = $row['staff_id'];
                  $_SESSION['place_id'] = $row['place_id'];
                  $_SESSION['role'] = "Staff";
        
                  header("Location: redirect.php");
                  }else{
                    $msg = "<div class='alert alert-warning mag'>Incorrect Password</div>";
                  }
              }
            } elseif ($role == "student"){
              $sqli = "SELECT * FROM std_tbl WHERE email = '$email' AND password = '$password'";
              $resul = mysqli_query($conn, $sqli);
              if (mysqli_num_rows($resul) === 1) {
          
                $row = mysqli_fetch_assoc($resul);
                if ($row['password'] === $password) {
                  $_SESSION['name'] = $row['std_name'];
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['id'] = $row['std_id'];
                  $_SESSION['role'] = $row['role'];
                  $_SESSION['inst'] = $row['inst_id'];

                  header("Location: redirect.php");
                  }else{
                    $msg = "<div class='alert alert-warning mag'>Incorrect Password</div>";
                  }
                }
            }
    }
  }
?>
             <!-- MENU LINKS -->
             
             <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Services</a></li>
                    <li><a href="index.php">Training</a></li>
                    <li><a href="index.php">About Us</a></li>
                    <li><a href="index.php">Contact</a></li>
                   <li class="login-btn"><a href="login.php"><i class="fa fa-login"></i>Log in</a></li>
                    <li class="appointment-btn"><a href="register.php"><i class="fa fa-register"></i>Register</a></li>

                  </ul>
             </div>

        </div>
</nav>

   <div class="container-fluid login-background">
        <div class="container">
     <div class="col-sm-2"></div>

     <div class="col-sm-8">
           <!-- <img src="" alt="logo"> -->
           <h3 class="login-caption-text bit">Welcome back Sign in to Continue</h3>
           <!-- <h3 class="login-caption-text bit">Sign in to SIWES Web</h3> -->
           <?php  
                      if(isset($_POST['login'])){
                        echo $msg;
                      }
                        ?>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
       <div class="form-group">
         <label for="user">Email Address</label>
         <input type="email" name="email" class="form-control" placeholder="" id="email">
       </div>
       <div class="form-group">
         <label for="user">Log as</label>
          <select class="form-control" id="sel1" name="role">
            <option value="admin">Admin</option>
            <option value="place">Coordinator</option>
            <option value="staff">Staff</option>
            <option value="student">Student</option>
          </select>
        </div>
       <div class="form-group">
         <label for="password">Password</label> <a class="forg" href="#">Forget password?</a>
         <input type="password" name="password" class="form-control" id="password">
       </div>
       <button type="submit" name="login" class="btn btn-danger button-full">Sign in</button>
     </form>
       <div class="new">
          <p class="mag bit">New to SIWES Web?<a href="register.php">Create an account.</a></p></div>  
          </div>
     </div> 
 </div>

    <!-- FOOTER -->  
    <?php 
          require "../inc/footer.php"; 
     ?>