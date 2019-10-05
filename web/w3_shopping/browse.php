<?php 
    session_start();
    $_SESSION['cart']=array();
?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Browse</title>
    <meta name="Description" content="Broswe Miracle Max">
    <meta name="Victoria Mears" content="Miracle Max Apothecary">

    <link rel="stylesheet" type="text/css" href="shopping.css">
    <script src="shopping.js"></script>
</head>

<?php include 'header.php';?>
    
<body id="browse_page" >
    
    <div class="browse_row">
        <div class="item_1">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Love Potion">Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item_2">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item_3">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item_4">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
    </div>
        
    <div class="browse_row">
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
    </div>
    
    <div class="browse_row">
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button>Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
    </div>
    
</body>
</html>
