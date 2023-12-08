<?php
    session_start();
?>
<html>
<head>
	<title>Login Form</title>

<style>
    body{
        background-repeat:no-repeat;
        background-size: cover;
        background: url('images/indexback.jpg');
    }
    div{
        padding:20;
        font-size:20;
    }
    h2{
        font-size:30;
        color:#1A5276;
        text-align:center;
    }
    .container {
        left:50;
        right:750;
        position:absolute;
        margin:50px 80px;
        padding:14px;
        border-radius:25px;
        border-color:#1A5276;
        border-style:solid;
        background-color: #A9CCE3;
        font-family:Century Gothic;	
    }
    .error{
        color: red;
    }
    .text
    {
        background-color:white;
        border:none;
        padding:9px 10px;
        margin-left: 20px
    }
    select{
        margin-left: 20px; 
        width: 200px; 
        height: 30px; 
        margin-bottom: 30px;
    }
    label{
        margin-left: 20px;
    }
    input[type='submit']{
        width:300px;
        height:40px;
        border-radius:10px ; 
        margin: 10px; 
        font-size: 18px; 
        background-color: #1A5276; 
        color: white;
    }

</style>
</head>

<body>

<form method="post" action="chkuser.php" class="container">

<div>

<h2>Vaccination System</h2>	

<center><img src="images/logo.png" width="100" height="100" alt="Logo" align="center" ></img><br></center>

<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="uname" class="text" placeholder="Username" size="62" required /></br></br>

<label><b>Password</b><span class="error">*</span></label></br>
<input type="password" name="pass" class="text" placeholder="Enter Password" size="62" required /></br></br>

<label><b>You are a</b><span class="error">*</span></label></br>
<select name="utype" required>
    <option value="none" selected disabled hidden> Select an Option</option>
    <option value="Admin">Admin</option>
    <option value="Parent">Parent</option>
</select> 

<br>
<center>

<input type="Submit" name="login" value="Login" /><br>
<br>

Don't have an account yet?<a href="registration.php"><b>Register</b></a>
<br>
<?php
            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                session_destroy();
            } 
?>

</center>
</div>
</body>
</form>
</html>