<?php

// Includes Php config file
include("config.php");

// Insert data in SQL
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];

    $result = mysqli_query($mysqli, "INSERT INTO purchaseform VALUES ('','$name','$product','$quantity','$date')");
    if ($result) {
        header("location:purchase.php");
    } else {
        echo ("Failed");
    }
}

// Display Result

$displayResult = mysqli_query($mysqli, "SELECT * FROM purchaseform ORDER by id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Purchase</title>
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
                <h1>Enter Purchase Details</h1>
                <label>Name</label><input type="text" name="name" placeholder="Eg.Kushal Farms" autocomplete="off"><br>
                <label>Product</label><input type="text" name="product" placeholder="Eg.Tomato" autocomplete="off"><br>
                <label>Quantity(Kg)</label><input type="text" name="quantity" placeholder="Eg.1000" autocomplete="off"><br>
                <label>Date</label><input type="date" name="date"><br>

                <button type="submit" name="submit">Submit</button>
            </form>

        </div>

        <div class="purchase-table">
            <table class="purchase-content-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <?php
                while ($res = mysqli_fetch_array($displayResult)) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $res['name'];
                    echo '<td>' . $res['product'];
                    echo '<td>' . $res['quantity'];
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