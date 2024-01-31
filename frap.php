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

    <h1>Frappuccino</h1>
    <div class="frapmenu">
        <div class ="c5">
    <img src="c5.png" alt="c5" class="c5img">
    <p class = "beveragename"> Chocolate Frappuccino</p>
    <button class="orderbutton" id="orderButton5" data-modal="sizeModal5" databeverage="Chocolate Frappuccino">Order Now</button>

        <div id="sizeModal5" class="modal">
            <div class="modal-content">

                <h2>Please choose a size:</h2>
                <button class="sizeButton" data-size="Tall - $6" >Tall - $6</button>
                <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
                <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

                <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton5" data-modal="sizeModal5" databeverage="Chocolate Frappuccino" >Confirm the order</button>
                </div>
                <button class="closemodalbutton" data-modal = "sizeModal5">&times;</button>
            </div>
        </div>
    </div>

    <div class ="c8">
    <img src="c8.png" alt="c8" class="c8img">
    <p class = "beveragename"> Matcha Frappuccino</p>
    <button class="orderbutton" id="orderButton8" data-modal="sizeModal8" databeverage="Matcha Frappuccino">Order Now</button>

        <div id="sizeModal8" class="modal">
            <div class="modal-content">

                <h2>Please choose a size:</h2>
                <button class="sizeButton" data-size="Tall - $6" >Tall - $6</button>
                <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
                <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

                <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton8" data-modal="sizeModal8" databeverage="Matcha Frappuccino">Confirm the order</button>
                </div>
                
                <button class="closemodalbutton" data-modal = "sizeModal8">&times;</button>
            </div>
        </div>
    </div>

    <div class ="c9">
    <img src="c9.png" alt="c9" class="c9img">
    <p class = "beveragename"> Berry Frappuccino</p>
    <button class="orderbutton" id="orderButton9" data-modal="sizeModal9" databeverage="Berry Frappuccino">Order Now</button>

        <div id="sizeModal9" class="modal">
            <div class="modal-content">

                <h2>Please choose a size:</h2>
                <button class="sizeButton" data-size="Tall - $6" >Tall - $6</button>
                <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
                <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

                <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>

                <div>
                <button class="confirmButton" id="confirmbutton9" data-modal="sizeModal9" databeverage="Berry Frappuccino">Confirm the order</button>
                </div>
                
                <button class="closemodalbutton" data-modal = "sizeModal9">&times;</button>
            </div>
        </div>
    </div>
    </div>
    
    <footer>
        <div class="copyright-part">
            <p class="footertext">&copy;Josie Ying - Moonbucks Cafe 2023</p>
        </div>
    </footer>

    <script src="cafeorder.js"></script>
</body>
</html>