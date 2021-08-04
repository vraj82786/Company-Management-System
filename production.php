<?php

// Includes Php config file
include("config.php");

// Insert data in SQL
if (isset($_POST['submit'])) {
    $available = $_POST['available'];
    $sold = $_POST['sold'];
    $wasted = $_POST['wasted'];
    $date = $_POST['date'];

    $result = mysqli_query($mysqli, "INSERT INTO productionform VALUES ('','$available','$sold','$wasted','$date')");
    if ($result) {
        header("location:production.php");
    } else {
        echo ("Failed");
    }
}

// Display Result

$displayResult = mysqli_query($mysqli, "SELECT * FROM productionform ORDER by id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>production</title>
</head>

<body>

    <nav id="nav">
        <ul id="nav-ul">
            <li class="nav-li"><a href="index.html">Home</a></li>
            <li class="nav-li"><a href="purchase.php">Purchase</a></li>
            <li class="nav-li"><a href="sales.php">Sales</a></li>
            <li class="nav-li"><a href="production.php">Production</a></li>
        </ul>
    </nav>
    <div id="purchase-main-container">

        <div class="purchase-input-form">
            <form action="" method="POST">
                <h1>Enter Production Details</h1>
                <label>Available (Kg)</label><input type="text" name="available" placeholder="Eg.5000" autocomplete="off"><br>
                <label>Sold (Kg)</label><input type="text" name="sold" placeholder="200000" autocomplete="off"><br>
                <label>Wasted (Kg)</label><input type="text" name="wasted" placeholder="150000" autocomplete="off"><br>
                <label>Date</label><input type="date" name="date"><br>

                <button type="submit" name="submit">Submit</button>
            </form>

        </div>

        <div class="purchase-table">
            <table class="purchase-content-table">
                <thead>
                    <tr>
                        <th>Available (Kg)</th>
                        <th>Sold (Kg)</th>
                        <th>Wasted (Kg)</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <?php
                while ($res = mysqli_fetch_array($displayResult)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $res['available'];
                    echo '<td>' . $res['sold'];
                    echo '<td>' . $res['wasted'];
                    echo '<td>' . $res['date'];
                    echo '<tr>';
                    echo '</tbody>';
                }
                ?>
            </table>

        </div>

    </div>

</body>

</html>