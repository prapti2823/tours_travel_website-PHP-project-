<?php
require_once "config.php";

if (isset($_POST['submit'])) {


    $fullname = $_POST['fullname'];
    $contact = $_POST['mno'];
    $email = $_POST['email'];
    $password = md5($_POST['pwd']);

    $qry = "INSERT INTO user(fullname,contact,email,password) VALUES('$fullname','$contact','$email','$password')";

    $result = mysqli_query($con, $qry);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\css\register2.css" type="text/css">
    <link href=".\css\bootstrap.min.css" rel="stylesheet" />
    <script src=".\js\bootstrap.bundle.min.js"></script>
    <script src="//code.tidio.co/kptpfzpyeovlls5n4etsbbeaba6jonm4.js" async></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="./img/1.png" type="image" rel="icon">
    <title>Sky Bright Tours and Travels</title>
</head>

<body>
    <nav class="sticky-top">
        <!--<div class="navbar-brand">
            <a href="#">Logo</a>
          </div>-->
        <!-- <div class="navbar-search">
      <ul>
        
      </ul>
    </div> -->
        <div class="menu">
            <ul>
                <li><a href="homepage.php"><i class="bi bi-house"></i>Home</a></li>
                <li><a href="about.html"><i class="bi bi-info-square-fill"></i>About</a></li>
                <li>
                    <a href="pack.php"><i class="bi bi-airplane-fill"></i>
                        Packages
                    </a>
                    <!--class="nav-item dropdown"
                 data-bs-toggle="dropdown" aria-expanded="false"<ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="andaman-nicobar.html">Andaman-Nicobar</a></li>
                <li><a class="dropdown-item" href="himachal.html">Himachal</a></li>
                <li><a class="dropdown-item" href="kerala.html">Kerala</a></li><br>
                <li><a class="dropdown-item" href="kashmir.html">Kashmir</a></li>
                <li><a class="dropdown-item" href="leh-ladakh.html">Leh-Ladakh</a></li>
                <li><a class="dropdown-item" href="vaishnodevi.html">Vaishnodevi</a></li>
              </ul>-->
                </li>
                <li><a href="gallery.html"><i class="bi bi-image-fill"></i>Gallery</a></li>
                <li><a href="contactus.php"><i class="bi bi-person-lines-fill"></i>Contact</a></li>
                <li><a href="./adminlogin.php" target="_blank"><i class="bi bi-file-person"></i>Admin</a></li>
                <li style="float: right;"><a href="login.php"><i class="bi bi-person-circle"></i>Login</a></li>
                <li style="float: right;"><a href="register.php"><i class="bi bi-pencil-square"></i>Sign Up</a></li>
            </ul>
        </div>
    </nav>
    <div style="position:relative;">
        <img src="./img/1.png" height="500px" width="100%" style="opacity: 50%;" />
        <div style="top:35%; left:35%; position: absolute;">
            <h1 style="font-size:80px;">Home > Signup</h1>
        </div>
    </div>
    <section>
        <div class="form-box">
            <form method="post">
                <div>
                    <h1>Sign Up Form</h1>
                </div>
                <div class="inputbox">
                    <input type="text" name="fullname" required>
                    <label>Full Name</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="mno" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10"
                        pattern="([0-9]){10,}">
                    <label>Mobile Number</label>
                </div>
                <div class="inputbox">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="pwd" required minlength="8" maxlength="20"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                        title="password must cantain at least one number and one uppper case and one lowercase letter and minimum 8 characters and maximum 20 characters">
                    <label>Password</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="cpwd" required>
                    <label>Confirm Password</label>
                </div>
                <diV>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </diV>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

    </section>
    <footer>
        <div class="contact-us">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us with any questions or inquiries.</p>
            <ul>
                <li>Email: shahprapti585@gmail.com</li>
                <li>Phone: +91 8155920951</li>
                <!--<li>Address: 123 Main Street, City, Country</li>-->
            </ul>
            <div>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </footer>
</body>

</html>