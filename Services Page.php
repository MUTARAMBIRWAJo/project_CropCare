<?php
$dbhost = "localhost";
$dbuname = "root";
$dbpassword = "";
$dbname = "crop care";
$con = mysqli_connect($dbhost,$dbuname,$dbpassword,$dbname);

if(isset($_POST['LogIn'])){

$email= $_POST['Username'];
$password= $_POST['password'];
 
$select="SELECT * FROM signup WHERE email='$email' limit 1";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password == $row['password']){
        header("location:c:\Users\JOSEPH\Desktop\PEOJECT FILE  AND REQUIRE\WEB PROJECT\htdocs\My Web Project\User/Front page.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROP CARE | SERVICES PAGE</title>
    <link rel="icon" href="Images/CR Logo2.png" type="image/x-icon">
    <style> 
    
        /*--------------------------FORM CSS--------------------------*/
        body{
            margin: 0px;
            height: auto;
            display: flex;
            background-size: cover;
        }  
             .dd{
                position: relative;
                display: inline-block;
             }
             .form-log{
                position: absolute;
                width: auto;
                height: 0px;
                transition: height 0.3s;
                overflow: hidden;
             }
             .dd:hover > .form-log{
                height: 250px;
             }
             .form-log > a {
                display: block;
                height: 150px;
                color: blue;
             }
             input{
                outline: none;
                padding: 5px;
                border: none;
                border-bottom: 3px solid green;
             }
        
        </style>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/mystyleservices.css">
  <link rel="stylesheet" type="text/css" href="CSS/mystylee.css">
<body>
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
              <form method="POST" autocomplete="off" style="padding: 30px;">
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
           
           <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="CONTACT US.php">Contact Us</a></li>
           <li><a href="#" style="color: aliceblue;text-decoration: none;margin-right: 50px;margin-left: 30px;">Announcement</a></li>
       </ul>
   </div>
   </header>
              </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="contained">
                    <div class="allservice">
                        <div class="fservice">
                            <h3>PROVIDING TOOLS</h3>
                            <span>Those tools we give our customers include : <br>
                                <ul>
                                    <li>mehanical machines likes diggind machines,Irrigation machines and Weeding machines</li>
                                    <li>Other Agriculture Tools like Hoes,machet,Lausoire and other depends to customer choice</li>
                                    <li>Water Tanks to save water for irrigation</li>
                                    <li>Mobile Phone to inform and give update to farmner about his/her farming info or Software if he/she has owned one</li>
                                    <li>Tanks to keep the production when you collect your final product</li>
                                </ul>  </span>
                        </div>
                        <div class="sec-service">
                            <h3>PRODUCTS PROVIDED</h3>
                            <span>Those are the product we offer to our customers:<br>
                                <ul>
                                    <li>Pest insides</li>
                                    <li>Fertilizers(Mannures)</li>
                                    <li>Seeds</li>
                                </ul>
                            </span>
                        </div>
                       <div class="third-service">
                        <h3>SERVICES</h3>
                        <span>These services some of them we provide them to our customer Online mainly on this websites and others are offline.
                            Those include:<br>
                            <ul>
                                <li>Account Creation</li>
                                <li>Showing The Dashboard of how their acctivities aregoing on.</li>
                                <li>Being links to Government Organisation that are in charges of Agriculture to our customers</li>
                                <li>Being links to Non-Government Organisation that are in charges of Agriculture to our customers</li>
                                <li>Prepare seminal of making Agricultural activities to Business</li>
                                <li>Organizing and Prepare Competition</li>
                                <li>Find the market and linking them to market even Grobal Market</li>
                            </ul>

                        </span>
                       </div>
                 
                    </div>
                    
                </div>

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