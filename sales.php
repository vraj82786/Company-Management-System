<?php

// Includes Php config file
include("config.php");

// Insert data in SQL
if (isset($_POST['sub'])) {
    $totalkgsold = $_POST['totalkgsold'];
    $todayscollection = $_POST['todayscollection'];
    $totalexpences = $_POST['totalexpences'];
    $date = $_POST['date'];

    $result = mysqli_query($mysqli, "INSERT INTO salesform VALUES ('','$totalkgsold','$todayscollection','$totalexpences','$date')");
    if ($result) {
        header("location:sales.php");
    } else {
        echo ("Failed");
    }
}

// Display Result

$displayResult = mysqli_query($mysqli, "SELECT * FROM salesform ORDER by id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>sales</title>
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
                <h1>Enter Sales Details</h1>
                <label>Total Sales(Kg)</label><input type="text" name="totalkgsold" placeholder="Eg.5000" autocomplete="off"><br>
                <label>Total Collection(Rs)</label><input type="text" name="todayscollection" placeholder="200000" autocomplete="off"><br>
                <label>Total Expences(Rs)</label><input type="text" name="totalexpences" placeholder="150000" autocomplete="off"><br>
                <label>Date</label><input type="date" name="date"><br>

                <button type="submit" name="submit">Submit</button>
            </form>

        </div>

        <div class="purchase-table">
            <table class="purchase-content-table">
                <thead>
                    <tr>
                        <th>Total Sales(Kg)</th>
                        <th>Total Collection</th>
                        <th>Total Expences</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <?php
                while ($res = mysqli_fetch_array($displayResult)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $res['totalkgsold'];
                    echo '<td>' . $res['todayscollection'];
                    echo '<td>' . $res['totalexpences'];
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