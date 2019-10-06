<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Miracle Checkout</title>
    <meta name="Description" content="Checkout">
    <meta name="Victoria Mears" content="Checkout">

    <link rel="stylesheet" type="text/css" href="shopping.css">
    <script src="shopping.js"></script>
</head>

<?php include 'header.php';?>
<body>
    <form>
        We deliver by horse and cart. Please Enter Your address.<br><br>
        Street Address: <input type="text" name="street_address"><br><br>
        City: <input type="text" name="city"><br><br>
        State: <input type="text" name="state"><br><br>
        Zip Code: <input type="text" name="zip"><br><br>
        country: <input type="text" name="country"><br><br>
        <input type="submit" value="Complete Purchase">
        <a href="cart.php"><button>Back to Cart</button></a>
    </form>
  
</body>
</html>
