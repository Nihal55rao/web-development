<?php

    $username=$POST['username'];
    $password=$POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_srting($username);
    $password = mysql_real_escape_string($password);


    mysql_connect("localhost","root","");
    mysql_select_db("demo");

    $result=mysql_query("select * from loginform where username = '$username' ans password = '$password'")
    or die("Failed to queey database ".mysql_error());
    

    }
 


?>
<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Project name login & registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="signin()">Sign Up</button>
        </div>
        <div class="social-icons">
            <img src="fb.png">
            <img src="gp.png">
    
        </div>
        <form id="login" action="index.html" method="POST" class="input-group">
            <input type="text" name="username" class="input-field" placeholder="User Id" required>
            <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box" ><span>Remember Password</span>
            <button type="submit" class="submit-btn" value="login">Log In</button>
        </form>
        <form id="signin" action="survey.html" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box" ><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn" href="survey.html">Sign Up</button>
        </form>
        
</div>



<!------JavaScript for toggle menu---->
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("signin");
    var z=document.getElementById("btn");
    var navLinks = document.getElementById("navLinks");

    function signin(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";

    }
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
    }

</script>


</body>
<?php
    $server="sql200.epizy.com";
    $username="epiz_30900904";
    $password="quh1rZLS5afKtYf";
    $dbname="epiz_30900904_nihalramagiri";

session_start();
$con=mysqli_connect($server,$username,$password,$dbname);
?>
</html>
