<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type = "text/css" href="cafeorder.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Moonbucks Café</title>
</head>
<body>
    
    <header class="header-menu-position">   
            <a href ="logolink" class = "logo"><span>Moonbucks Café</span></a>
            
            <nav class="sidebar"> 
                <a href="home.php">Home</a>
                <a href="coffee.php">Coffee</a>
                <a href="frap.php">Frappuccino</a>
                <a href="tea.php">Tea</a>
                <a href="myorder.php">My Order</a>
            </nav>

    </header>


    <div class="orders">
        <h1>My Order</h1>
        
        <form action="sort.php" method="get">
            <label for="sortOrder">Sort By:</label>
            <select name="sortOrder" id="sortOrder">
                <option value="newest">Newest to Oldest</option>
                <option value="oldest">Oldest to Newest</option>
            </select>
            <input type="submit" value="Sort">
        </form>

        <table class="ordertable">
            <?php
                $conn = new mysqli("localhost", "root", "", "moonbucks");

                if($conn->connect_error){
                    die("Connection failed:" .$conn->connect_error);
                  }
                
              // Fetch orders from the database
                $result = $conn->query("SELECT * FROM mycafeorder");
                if ($result->num_rows > 0) {
                    echo "<table class='ordertable'>";
                    echo "<tr><th>Beverage Image</th><th>Beverage Name</th><th>Size - Price</th><th>Pick-Up Time</th><th>Clear</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        $dateTime = new DateTime($row["time"], new DateTimeZone('Pacific/Auckland'));
                        $formattedTime = $dateTime->format("d/m/Y H:i");
                        $drink_name = $row["name"];

                        echo "<tr>";
                        $image_result = $conn->query("SELECT image_filename FROM images WHERE `drink` = '$drink_name'");
                        $image_filename = $image_result->fetch_assoc();
                        $image_filename = $image_filename['image_filename'];
                        
                        echo "<td><img src='$image_filename' alt='beverageImage' style='width: 50px; height: 50px;'></td>";

                        echo"
                            
                            <td>" . $row["name"] . "</td><td>" . $row["sizePrice"] . "</td><td>" . $formattedTime . "</td>
                            
                            <td>
                            <button class='deleteButton' data-orderid='" . $row["id"] . "'>Delete</button>
                            </td>
                            
                            </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No order yet!";
                }


                // show the order
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirmOrder"])) {
                    $beverageImage = isset($_POST["beverageImage"]) ? $_POST["beverageImage"] : "";
                    $name = isset($_POST["name"]) ? $_POST["name"] : "";
                    $sizePrice = isset($_POST["sizePrice"]) ? $_POST["sizePrice"] : "";
                    $time = isset($_POST["time"]) ? $_POST["time"] : "";
                    
                    if (!empty($name) && !empty($sizePrice) && !empty($time) && !empty($beverageImage)) {
                        $formattedTime = date("Y-m-d H:i:00", strtotime($time));
                        $query = $conn->prepare("INSERT INTO mycafeorder(beverageImage, name, sizePrice, time) VALUES (?, ?, ?, ?)");
                        $query->bind_param("ssss", $beverageImage, $name, $sizePrice, $formattedTime);
                        $query->execute();

                        $conn->close();
                    }
                }


                // delete the order
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteOrder"])) {
                    $orderId = isset($_POST["orderId"]) ? $_POST["orderId"] : "";
                    $query = $conn->prepare("DELETE FROM mycafeorder WHERE id = ?");
                    $query->bind_param("i", $orderId);
                    $query->execute();
                }

                //sort the order
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if (isset($_GET["sortOrder"])) {
                        $sortOrder = isset($_GET["sortOrder"]) ? $_GET["sortOrder"] : "";
                        $query = "SELECT * FROM mycafeorder";
                        
                        if ($sortOrder === "newest") {
                            $query .= " ORDER BY time DESC"; 
                        } else if ($sortOrder === "oldest") {
                            $query .= " ORDER BY time ASC";
                        }
                    }
                }
                
                ?>
        </table>
    </div>

    <footer>
        <div class="copyright-part">
            <p class="footertext">&copy;Josie Ying - Moonbucks Cafe 2023</p>
        </div>
    </footer>
    <script src="cafeorder.js"></script>
</body>
</html>