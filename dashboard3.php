
<?php
session_start();
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    echo "Session not set. Redirecting...";
    header("Location: loginindex.php");
    exit();
}

include('dbconnect.php');

$id = $_SESSION['id'];
$sql = "SELECT name FROM signup WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
} else {
    $name = "User";
}
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

#calendar {
  width: 300px; /* Set the width of the calendar */
  height: 300px; /* Set the height of the calendar */
  margin: 0 auto; /* Center the calendar on the page */
}

/* Adjust the size of the calendar itself */
.fc-daygrid {
  width: 100%; /* Set the width of the calendar grid */
  height: 100%; /* Set the height of the calendar grid */
}

/* Adjust the size of the calendar cells */
.fc-day {
  width: 40px; /* Set the width of each day cell */
  height: 40px; /* Set the height of each day cell */
}

    </style>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js'></script>

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
        
         <div class="dashboard">
        <!-- Profile Card -->
    <div class="top-cards">
        <div class="card profile-card">
            <h2>Profile</h2>
            <p>Welcome, <?php echo $name; ?></p>

                <?php
                // Fetch upcoming tasks from the database
                $currentDate = date('Y-m-d');
                $userId = mysqli_real_escape_string($conn, $_SESSION['id']);
                $sql = "SELECT * FROM tasks WHERE user_id = $userId AND task_date > '$currentDate' ORDER BY task_date ASC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h3>Upcoming tasks</h3>";
                    echo "<ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li>" . $row['task_name'] . " - " . $row['task_date'] . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No upcoming tasks</p>";
                }
                ?>
            <button onclick="alert('Edit Profile')">Edit Profile</button>
        </div>

        <div class="card">
            <div id='calendar'></div>
        </div>
    </div>
    <div class="bottom-cards">
        <!-- Inventory Card -->
        <div class="card inventory-card">
        <h2>Inventory</h2>
            <ul>
                <?php
                $user_id = $_SESSION['id'];

                $sql = "SELECT * FROM inventory WHERE user_id = '$user_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>Name: " . $row["name"] . "<br>Description: " . $row["description"] . "</li>";
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
            <?php
                $sql = "SELECT SUM(amountpaid) AS total_sales FROM sales WHERE user_id='{$_SESSION['id']}'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $total_sales = $row['total_sales'];
                    echo "<p>Total Sales: Ksh. " . $total_sales . "</p>";
                } else {
                    echo "<p>Total Sales: Ksh. 0</p>";
                }

                $sql = "SELECT * FROM sales WHERE user_id='{$_SESSION['id']}'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>Ksh. " . $row["amountpaid"] . "</li>";
                    }
                } else {
                    echo "<li>No items found</li>";
                }

            ?>
            <button><a href="sales.php">Add item</a></button>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: function(fetchInfo, successCallback, failureCallback) {
            // Fetch events from the database for the logged-in user
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'load-events.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        successCallback(JSON.parse(xhr.responseText));
                    } else {
                        failureCallback(xhr.responseText);
                    }
                }
            };
            xhr.send('user_id=' + encodeURIComponent(<?php echo $_SESSION['id']; ?>));
        },
        dateClick: function(info) {
            var date = info.dateStr;
            var taskName = prompt('Enter a task name for ' + date + ':');
            if (taskName) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'save-reminder.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Task added: ' + taskName);
                            calendar.refetchEvents();
                        } else {
                            alert('Error adding task');
                        }
                    }
                };
                xhr.send('task_name=' + encodeURIComponent(taskName) + '&task_date=' + encodeURIComponent(date) + '&user_id=' + encodeURIComponent(<?php echo $_SESSION['id']; ?>));
            }
        }
    });

    calendar.render();
});

</script>

</body>
</html>


