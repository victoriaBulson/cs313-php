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
        <div class="item" id="love_potion">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Love Potion">Add to cart</button>
                <p>Love Potion $42</p>
            </div>
        </div>
        <div class="item" id="item_2">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 2">Add to cart</button>
                <p>Item 2 $42</p>
            </div>
        </div>
        <div class="item" id="item_3">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 3">Add to cart</button>
                <p>Item 3 $42</p>
            </div>
        </div>
        <div class="item" id="item_4">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 4">Add to cart</button>
                <p>Item 4 $42</p>
            </div>
        </div>
    </div>
        
    <div class="browse_row">
        <div class="item" id="item_5">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 5">Add to cart</button>
                <p>Item 5 $42</p>
            </div>
        </div>
        <div class="item" id="item_6">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 6">Add to cart</button>
                <p>Item 6 $42</p>
            </div>
        </div>
        <div class="item" id="item_7">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 7">Add to cart</button>
                <p>Item 7 $42</p>
            </div>
        </div>
        <div class="item" id="item_8">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 8">Add to cart</button>
                <p>Item 8 $42</p>
            </div>
        </div>
    </div>
    
    <div class="browse_row">
        <div class="item" id="item_9">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 9">Add to cart</button>
                <p>Item 9 $42</p>
            </div>
        </div>
        <div class="item" id="item_10">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 10">Add to cart</button>
                <p>Item 10 $42</p>
            </div>
        </div>
        <div class="item" id="item_11">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 11">Add to cart</button>
                <p>Item 11 $42</p>
            </div>
        </div>
        <div class="item" id="item_12">
            <img src="pics/love_potion.jpg" alt="Love Potion Image" class="browse_img">
            <div class="info">
                <button onClick="addToCart(this)" value="Item 12">Add to cart</button>
                <p>Item 12 $42</p>
            </div>
        </div>
    </div>
    
</body>
</html>
