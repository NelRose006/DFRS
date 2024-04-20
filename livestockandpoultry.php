<?php
session_start();

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    echo "Session not set. Redirecting...";
    header("Location: loginindex.php");
    exit();
}

include 'dbconnect.php';

$userId = $_SESSION['id'];
if (!is_numeric($userId)) {
    echo "Invalid user ID. Redirecting...";
    header("Location: loginindex.php");
    exit();
}

$sql = "SELECT * FROM livestock_and_poultry WHERE user_id = $userId";
$result = $conn->query($sql);

if (!$result) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO livestock_and_poultry (user_id, name, type, amount, date, description) 
            VALUES ('{$_SESSION['id']}', '$name', '$type', '$amount', '$date', '$description')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Data stored in the database successfully.</h3>";

        header("Location: livestockandpoultry.php");
        exit;
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock/Poultry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 50%;
            padding: 20px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
            <li><a href="crops.php"><script src="https://cdn.lordicon.com/lordicon.js"></script>
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
        <h1>Livestock & Poultry</h1>

        <button onclick="document.getElementById('addItemModal').style.display='block'">Add livestock/poultry</button><br><br>

        <input type="text" id="searchInput" onkeyup="searchItems()" placeholder="Search Livestock or Poultry...">
        <button onclick="searchItems()">Search</button><br><br>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Description</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['type']."</td>";
                    echo "<td>".$row['amount']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No items found</td></tr>";
            }
            ?>
        </table>

        <div id="addItemModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('addItemModal').style.display='none'">&times;</span>
                <h2>Add New Livestock/Poultry</h2>
                <form action="livestockandpoultry.php" method="POST">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required><br>
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" required><br>
                    <label for="amount">Amount</label>
                    <input type="text" id="amount" name="amount" required><br>
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required><br>
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required><br>
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $userId; ?>">
                    <button type="submit">Add Livestock/Poultry</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function searchItems() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Change index to match the column of 'Name'
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
