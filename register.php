<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post" action="register.php">
  	<?php include('errors.php'); ?>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        
                            

                                <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"  value="<?php echo $username; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"  value="<?php echo $email; ?>"/>
                            </div>

                                                     
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-email"></i></label>
                                <input type="password" name="password" id="password" autocomplete="off" placeholder="password"/>
                            </div>


                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"  value="<?php echo $name; ?>"/>
                            </div>

                            <div class="form-group">
                            <label for="matric"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="matric" id="matric" placeholder="matric"  value="<?php echo $matric; ?>"/>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label for="dob"><i class="zmdi zmdi-birth"></i></label>
                                <input type="date" name="dob" id="dob" placeholder="Date Of Birth"  value="<?php echo $dob; ?>"/>
                            </div>
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender" value="<?php echo $gender; ?>">
                                        <option disabled="disabled" selected="selected">Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number"><i class="zmdi zmdi-email"></i></label>
                                <input type="tel" name="number" id="number" placeholder="Phone Number"  value="<?php echo $number; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="department"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="department" id="department" placeholder="Department"  value="<?php echo $department; ?>"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="reg_user" class="btn" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="namssn.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>