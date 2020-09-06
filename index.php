<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WT Assignment4</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body style="background-image: url(images/I4.jpg);">
    <h1>My Restaurant Menu</h1>
    
    <div id="menu" style="margin-left: 60%; display: inline-block;">
        <h1>
        <select name="selectMenu" class="menu2" id="menu3">
            <option value="">Select Menu Item</option>
        </select>
    </h1>

    </div>
    <br><br><br><br>
    <div id="myOrder" class="order">
        <h2>My Order</h2>

        ID: <span id="idee"></span><br>
        Short Name: <span id="shortName"></span><br>
        Name: <span id="Name"></span><br>
        Description: <span id="description"></span><br>
        Price Small: <span id="priceSmall"></span><br>
        Price Large: <span id="priceLarge"></span><br>

    </div>
    <script src="script/script.js" defer></script>
</body>
</html>