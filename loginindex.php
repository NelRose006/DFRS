
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer's Records System - Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        /*body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 100px auto;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .options {
            margin-top: 10px;
            font-size: 14px;
        }*/
        *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #a3b18a;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #6a994e,
        #a7c957
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #a7c957,
        #6a994e
    );
    right: -80px;
    bottom: -80px;
}
.form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #000;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #6a994e;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.options{
  margin-top: 30px;
  display: flex;
}
.options div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #000;
  text-align: center;
}
.options div:hover{
  background-color: rgba(255,255,255,0.47);
}
.options .a{
  margin-left: 25px;
}
.options i{
  margin-right: 4px;
}
                
    </style>
</head>
<body>
    
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="form">
        <h2>LOGIN</h2>
        <form action="dashboard3.php" method="post">
        
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>

            <button type="submit" value="Login">Log In</button>
        </form>
        <div class="options">
            <!--<a href="signUp.html">Sign Up</a> | <a href="forgot_password.html">Forgot Password?</a>-->
            <div class="a"><!--<i class="signUp.html"></i>  SignUp-->
                <a href="signUp2.php">Sign Up</a> 
            </div>
          <div class="a"><!--<i class="forgot_password.html"></i>  Forgot Password?-->
            <a href="forgot_password.html">Forgot Password?</a>
        </div>
        </div>
    </div>
</body>
</html>
<?php
error_reporting(0);
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "candy";
$password = "candy0107";
$database = "farmersrecords";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get username and password from the form
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT * FROM signup WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Execute SQL statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if username exists in the database
    if ($result->num_rows > 0) {
        // Fetch row
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Authentication successful, set session variable
            $_SESSION['username'] = $username;

            // Redirect to profile page
            header("Location: dashboard.php");
            exit;
        } else {
            // Authentication failed, display error message
            $error_message = "Invalid username or password!";
        }
    } else {
        // Authentication failed, display error message
        $error_message = "Invalid username or password!";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
