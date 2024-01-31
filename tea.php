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

    <h1>Tea</h1>
    <div class="teamenu">
        <div class ="c2">
    <img src="c2.png" alt="c2" class="c2img">
    <p class = "beveragename"> Grapefruit Green Tea</p>
    <button class="orderbutton" id="orderButton2" data-modal="sizeModal2" databeverage="Grapefruit Green Tea">Order Now</button>

        <div id="sizeModal2" class="modal">
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
                <button class="confirmButton" id="confirmbutton2" data-modal="sizeModal2" databeverage="Grapefruit Green Tea" >Confirm the order</button>
                </div>

                <button class="closemodalbutton" data-modal = "sizeModal2">&times;</button>
            </div>
        </div>
    </div>
    

    <div class ="c6">
    <img src="c6.png" alt="c6" class="c6img">
    <p class = "beveragename"> Passionfruit Lemon Tea</p>
    <button class="orderbutton" id="orderButton6" data-modal="sizeModal6" databeverage="Passionfruit Lemon Tea">Order Now</button>

        <div id="sizeModal6" class="modal">
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
                <button class="confirmButton" id="confirmbutton6" data-modal="sizeModal6" databeverage="Passionfruit Lemon Tea" >Confirm the order</button>
                </div>
                
                <button class="closemodalbutton" data-modal = "sizeModal6">&times;</button>
            </div>
        </div>
    </div>
    

    <div class ="c10">
    <img src="c10.png" alt="c10" class="c10img">
    <p class = "beveragename"> Thai Lemon Tea</p>
    <button class="orderbutton" id="orderButton10" data-modal="sizeModal10" databeverage="Thai Lemon Tea">Order Now</button>

        <div id="sizeModal10" class="modal">
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
                <button class="confirmButton" id="confirmbutton10" data-modal="sizeModal10" databeverage="Thai Lemon Tea" >Confirm the order</button>
                </div>

                <button class="closemodalbutton" data-modal = "sizeModal10">&times;</button>
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