<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <!--<link rel="stylesheet" href="styles.css">-->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}
header {
    background-color: #6a994e;
    color: #fff;
    text-align: center;
    padding: 20px;
}

nav {
    background-color: #6a994e;
    padding: 10px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    margin-bottom: 10px;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    display: block;
}

nav ul li a:hover {
    background-color: #ddd;
}

    </style>
</head>
<body>
    <header>
        <h1>DIGITAL FARMERS' RECORDS SYSTEM</h1>
    </header>

        <nav>
            <ul>
                <li><a href="dashboard3.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/cnpvyndp.json"
                        trigger="hover"
                        style="width:20px;height:20px">
                    </lord-icon>Dashboard</a></li>
                <li><a href="crops2.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/ysonqgnt.json"
                        trigger="hover"
                        style="width:20px;height:20px">
                    </lord-icon>crop</a></li>
                <li><a href="livestockandpoultry.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/viueejdd.json"
                        trigger="hover"
                        colors="primary:#000000,secondary:#08a88a"
                        style="width:20px;height:20px">
                    </lord-icon>livestock</a></li>
                <li><a href="inventory.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/vdjwmfqs.json"
                        trigger="hover"
                        style="width:20px;height:20px">
                    </lord-icon>inventory</a></li>
                <li><a href="sales.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/mfmkufkr.json"
                        trigger="hover"
                        style="width:20px;height:20px">
                    </lord-icon>sales</a></li>
                    <li><a href="loginindex.php" class="logout"><script src="https://cdn.lordicon.com/lordicon.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/vduvxizq.json"
    trigger="hover"
    style="width:20px;height:20px">
</lord-icon>
                     <i class="fas fa-sign-out-alt"></i>
                       <span class="nav-item">Log out</span></a>
                    </li> 
            </ul>
        </nav>
    
    <div class="container">
        <h2>LIVESTOCK</h2>
        <form action="livestock.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
<?php
error_reporting(0);
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "candy", "candy0107", "farmersrecords");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$type = $_REQUEST['type'];
		$amount = $_REQUEST['amount'];
		$date = $_REQUEST['date'];
		$description = $_REQUEST['description'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO livestock_and_poultry VALUES ('$name', 
			'$type','$amount','$date','$description')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
            .
            // Redirect to profile page
					header("Location: livestockandpoultry.php");
					exit;
				
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
