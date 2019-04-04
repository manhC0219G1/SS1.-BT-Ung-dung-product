<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form method="post">
    <input type="submit" value="Calculate Discount"><br><br>
    Product Description :<input type="text" name="description"><br><br>
    List Price : <input type="text" name="price"><br><br>
    Discount Percent : <input type="text" name="percent">(%)<br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $description = $_POST["description"];
        $price = $_POST["price"];
        $percent = $_POST["percent"];
    };
    $discountprice = $description * $price * (100 - $percent) / 100;
    echo "Discount Price : " . $discountprice
    ?>
</form>

</body>
</html>