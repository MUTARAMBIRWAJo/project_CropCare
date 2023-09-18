<?php

$con = mysqli_connect($dbhost,$dbuname,$dbpassword,$dbname);

if(isset($_POST['LogIn'])){

$email= $_POST['Username'];
$password= $_POST['pword'];
 
$select="SELECT * FROM signup WHERE email='$email' limit 1";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password == $row['pword']){
        header("location:c:\Users\JOSEPH\Desktop\PEOJECT FILE  AND REQUIRE\WEB PROJECT\htdocs\My Web Project\User/Front page.html");
    }
    else{
        echo "<script> alert(' Incorect password ');</script>";
    }
}
else{
    echo "<script> alert('User not Registered ');</script>";
}
}


?>

<html>
    <head><title>CROP CARE| Home Page</title>
    <style>
      *{
        margin: 0px;
        padding: 0px;
      }
    </style>
    </head>
    <link rel="stylesheet" type="text/css" href="CSS/mystylee.css">
    <body background="#2C7#">
      <table style="table-layout: none;"border= "0">
        <tr style="background-color: green;">
           <td colspan="6">
               <header>
       <div class="content-header" style="display: flex;  flex-wrap: wrap;height: 100px;">
           <img src="Images/CR Logo2.png" style="width: auto; height: 100px;">
           <ul style="display: flex; flex-wrap: wrap; margin-top: 70px; list-style: none;margin-left: 10px;">
           <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="homepage.php">Home</a></li>
           <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="CREATE ACCOUNT.PHP">Create Account</a></li>
           <li><div class="dd">
              <span class="link-log">
              <a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="#" class="logini">Log In</a>
              </span>
              <div class="form-log" style="border: 1px solid green;border-radius: 10px;text-align: left;background-color: gray;">
           <form action="index.php" method="post" style="padding: 30px;">
              <h3 style="color: green;text-align: center;">Log In Form</h3>
              <hr>
              <label for="username" style="font-size: larger;">Email:<br></label>
              <input type="text" name="Username" style="border-radius: 0px;background-color: aliceblue;"><br>
              <label for="password" style="font-size: larger;">Password:<br></label>
              <input type="password" name="password" style="border-radius: 0px;background-color: aliceblue;"><br>
              <button name="LogIn" style="color: white; background-color: green; border-radius: 5px;margin-top: 10px;">Log In</button>
          </form>
         </div>
      </div>
          </li>
           <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="Services Page.php">Services</a></li>
           
           <li><a style="text-decoration: none; color: white; font-size: x-large;margin-right: 100px;margin-left: 30px;" href="CONTACT US.php">Contact Us</a></li>
           <li><a href="#" style="color: aliceblue;text-decoration: none;margin-right: 50px;margin-left: 30px;">Announcement</a></li>
       </ul>
   </div>
   </header>
              </td>
        </tr>
            <tr>
                <td>

                 
A
                </td>
            </tr>
            <tr bgcolor="black">
              <td colspan="6">
                <section style="display: flex;margin-left: 20px;">
                <div style="text-align: left;margin-top: 20px;" >
                <h4 style="color: rgb(23, 136, 8);"><b><u>PARTNERS LINKS :</u></b></h4>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.rab.gov.rw</a><br/>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.reg.gov.rw</a><br/>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.rema.gov.rw</a><br/>
                <p style="color: rgb(14, 53, 87);">With the help of these links you may visit <br> the websites of our partners to see 
                  their activity <br> and explore much more of them</p>
                </div>
                <div style="margin-top: 20px;margin-left: 300px;">
                  <h4 style="color: rgb(23, 136, 8);"><b><u>SUPPORTING LINKS:</u></b></h4>
                  <a href="www:help.html" style="color: aliceblue;">Helps</a><br/>
                 <a href="www.AboutUs.html" style="color: aliceblue;">About Us</a><br/>
                 <a href="www.Faq.html" style="color: aliceblue;">FAQ</a><br/>
                 <p style="color: rgb(14, 53, 87);"> If these links do not help you enough Please use <br>
                   <mark> Contact Us </mark> on the top of this website</p>
                </div>
                <div style="margin-top: 20px;margin-left: 300px;">
                  <h4 style="color: rgb(23, 136, 8);"><b><u>VISIT OUR SOCIAL MEDIA:</u></b></h4>
                  <a href="http://www:facebook/Crop Care.com" style="color: aliceblue;">Facebook</a><br/>
                 <a href="http://www.twitter/Crop Care.com" style="color: aliceblue;">Twitter</a><br/>
                 <a href="http://www>instagram/Crop Care.com" style="color: aliceblue;">Instagram</a><br/>
                 <p style="color: rgb(14, 53, 87);"> If these links do not help you enough Please use <br>
                   <mark> Contact Us </mark> on the top of this website</p>
                </div>
              </section>
              </td>
              
            </tr>
        </table>
    </body>
</html>