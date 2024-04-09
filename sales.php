<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Form</title>
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
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6"><path fill="%23666" d="M6 5.196L0 .804 1.037 0l4.963 4.963L11.962 0 13 0z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px top 50%;
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
                    </lord-icon>dashboard</a></li>
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
        <h2>CUSTOMER ACTIVITY FORM</h2>
        <form action="sales.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="eg: Rose" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" placeholder="eg 0712345678" required>
            </div>
            <div class="form-group">
                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required>
            </div>
            <div class="form-group">
                <label for="quanity">Quantity:</label>
                <input type="text" id="quanity" name="quantity" placeholder="eg 5kgs" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="Crop">Crop</option>
                    <option value="livestock">Livestock</option>
                    <!--<option value="Electronics">Electronics</option>
                    <option value="Transportation">Transportation</option>-->
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amountPaid">Amount Paid:</label>
                <input type="text" id="amountPaid" name="amountPaid" placeholder="Enter amount paid" required>
            </div>
            <div class="form-group">
                <label for="modeOfPayment">Mode of Payment:</label>
                <select id="modeOfPayment" name="modeOfPayment" required>
                    <option value="Cash">Cash</option>
                    <!--<option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>-->
                    <option value="M-pesa">M-pesa</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<title>crops</title>
</head>

<body>
	
		<?php
        
       /* $name = $_POST['name'];
        $phonenumber = $_POST['phonenumber'];
        $itemname = $_POST['itemname'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $amountpaid = $_POST['amountpaid'];
        $modeofpayment = $_POST['modeofpayment'];
        $date= $_POST['date'];
        
        //Database connection
        $conn = new mysqli('localhost','candy','candy0107','farmersrecords');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else 
        {
            $stmt = $conn->prepare("insert into sales(name, phonenumber, itemname, quantity, category, amountpaid, modeofpayment, date) values(?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sisssssi", $name, $phonenumber, $itemname, $quantity, $category, $amountpaid, $modeofpayment, $date);
            $execval = $stmt->execute();
            echo $execval;
            echo "Registration successfully...";
           
                header("Location: sales.php");
                
            $stmt->close();
            $conn->close();
        }*/
//error_reporting(0);
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
		$phonenumber = $_REQUEST['phonenumber'];
		$itemname = $_REQUEST['itemname'];
        $quantity = $_REQUEST['quantity'];
		$category = $_REQUEST['category'];
		$amountpaid = $_REQUEST['amountpaid'];
		$modeofpayment= $_REQUEST['modeofpayment'];
        $date= $_REQUEST['date'];
		// Performing insert query execution
		// here our table name is sales
		$sql = "INSERT INTO sales VALUES ('$name','$phonenumber','$itemname','$quantity','$category','$amountpaid','$modeofpayment','$date')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. 

					// Redirect to profile page
					header("Location: sales.php");
					exit;
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>