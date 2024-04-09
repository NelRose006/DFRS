<?php

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

// Retrieve inventory items from database




// Close connection

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* CSS code for the dashboard */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/*.dashboard {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
}

.card {
    width: 200px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card h2 {
    margin-top: 0;
}

.card button {
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

.card button:hover {
    background-color: #45a049;

}
.top-cards,
.bottom-cards {
    display: flex;
    justify-content: space-around;
    width: 100%;
    margin-top: 20px;
}*/
/* CSS code for the dashboard */

/*body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}*/

.dashboard {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.top-cards,
.bottom-cards {
    display: flex;
    justify-content: space-around;
    width: 100%;
    margin-top: 20px;
}

.card {
    width: 300px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card h2 {
    margin-top: 0;
}

.card a {
    display: block;
    margin-top: 10px;
    text-align: center;
    text-decoration: none;
    color: black;
}

.card a:hover {
    text-decoration: underline;
}

.card form {
    margin-top: 10px;
}

.card input[type="text"] {
    width: calc(100% - 70px);
    padding: 5px;
    margin-right: 5px;
}

.card button {
    background-color: #4CAF50;
    color: black;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.card button:hover {
    background-color: #a7c957;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

ul li {
    padding: 5px 0;
    border-bottom: 1px solid #ddd;
}

ul li:last-child {
    border-bottom: none;
}

header {
    background-color: #6a994e;
    color: #fff;
    text-align: center;
    padding: 5px;
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
</head>
<body>
    <!-- Include header and navigation -->
    
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
        
         <div class="dashboard">
        <!-- Profile Card -->
        <div class="top-cards">
        <div class="card profile-card">
            <h2>Profile</h2>
            <p>Welcome, User!</p>
            <button onclick="alert('Edit Profile')">Edit Profile</button>
        </div>

        <!-- Search Card -->
        <div class="card search-card">
            <h2>Search</h2>
            <form action="livestock.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
        </div>
</div>
<div class="bottom-cards">
        <!-- Inventory Card -->
        <div class="card inventory-card">
            <h2>Inventory</h2>
            <ul>
                <?php
                $sql = "SELECT * FROM inventory";
                $result = $conn->query($sql);
                // Display inventory items
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["type"] . "</li>";
                    }
                } else {
                    echo "<li>No items found</li>";
                }
                ?>
            </ul>
            <button><a href="inventory.php">Add item</a></button>
        </div>

        <!-- Sales Card -->
        <div class="card sales-card">
            <h2>Sales</h2>
            <p>Total Sales: $1000</p>
            <?php
            // Retrieve sales items from database
$sql = "SELECT * FROM sales";
$result = $conn->query($sql);

                // Display inventory items
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["amountpaid"] . "</li>";
                    }
                } else {
                    echo "<li>No items found</li>";
                }
                ?>
            <button><a href="sales.php">Add item</a></button>
        </div>
    </div>
        </div>
</body>
</html>


