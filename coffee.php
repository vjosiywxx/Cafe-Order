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

    <h1>Coffee</h1>
    <div class="coffeemenu">

    <div class ="c1">
    <img src="c1.png" alt="c1" class="c1img">
    <p class = "beveragename" id="bn1"> Coconut Latte</p>
    <button class="orderbutton" id="orderButton1" data-modal="sizeModal1" databeverage="Coconut Latte">Order Now</button>

    <div id="sizeModal1" class="modal">
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
                <button class="confirmButton" id="confirmbutton1" data-modal="sizeModal1" databeverage="Coconut Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal1">&times;</button>
        </div>
    </div>

    </div>

    <div class ="c3">
    <img src="c3.png" alt="c3" class="c3img">
    <p class = "beveragename" id="bn3"> Pineapple Latte</p>
    <button class="orderbutton" id="orderButton3" data-modal="sizeModal3" databeverage="Pineapple Latte">Order Now</button>
    
    <div id="sizeModal3" class="modal">
        <div class="modal-content">

            <h2>Please choose a size:</h2>
            <button class="sizeButton" data-size="Tall - $6">Tall - $6</button>
            <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
            <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

            <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now">Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton3" data-modal="sizeModal3" databeverage="Pineapple Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal3">&times;</button>
        </div>
    </div>

    </div>

    <div class ="c4">
    <img src="c4.png" alt="c4" class="c4img">
    <p class = "beveragename " id="bn4"> Orange Latte</p>
    <button class="orderbutton" id="orderButton4" data-modal="sizeModal4" databeverage="Orange Latte">Order Now</button>

    <div id="sizeModal4" class="modal">
        <div class="modal-content">

            <h2>Please choose a size:</h2>
            <button class="sizeButton" data-size="Tall - $6">Tall - $6</button>
            <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
            <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

            <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton4" data-modal="sizeModal4" databeverage="Orange Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal4">&times;</button>
        </div>
    </div>
    </div>

    <div class ="c12">
    <img src="c12.png" alt="c12" class="c12img">
    <p class = "beveragename" id="bn12"> Avocado Latte</p>
    <button class="orderbutton" id="orderButton12" data-modal="sizeModal12" databeverage="Avocado Latte">Order Now</button>


    <div id="sizeModal12" class="modal">
        <div class="modal-content">

            <h2>Please choose a size:</h2>
            <button class="sizeButton" data-size="Tall - $6">Tall - $6</button>
            <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
            <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

            <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton12" data-modal="sizeModal12" databeverage="Avocado Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal12">&times;</button>
        </div>
    </div>
    </div>

    <div class ="c13">
    <img src="c13.png" alt="c13" class="c13img">
    <p class = "beveragename" id="bn13"> Almond Latte</p>
    <button class="orderbutton" id="orderButton13" data-modal="sizeModal13" databeverage="Almond Latte">Order Now</button>

    <div id="sizeModal13" class="modal">
        <div class="modal-content">

            <h2>Please choose a size:</h2>
            <button class="sizeButton" data-size="Tall - $6">Tall - $6</button>
            <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
            <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>

            <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton13" data-modal="sizeModal13" databeverage="Almond Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal13">&times;</button>
        </div>
    </div>
    </div>

    <div class ="c14">
    <img src="c14.png" alt="c14" class="c14img">
    <p class = "beveragename" id="bn14"> Grape Latte</p>
    <button class="orderbutton" id="orderButton14" data-modal="sizeModal14" databeverage="Grape Latte">Order Now</button>


    <div id="sizeModal14" class="modal">
        <div class="modal-content">

            <h2>Please choose a size:</h2>
            <button class="sizeButton" data-size="Tall - $6">Tall - $6</button>
            <button class="sizeButton" data-size="Grande - $8">Grande - $8</button>
            <button class="sizeButton" data-size="Venti - $10">Venti - $10</button>
           
            <h3>Please choose a pick up time:</h3>
                <button class="timeButton" data-time="Right Now" >Right Now</button>
                <button class="timeButton" data-time="In 30 mins">In 30 mins</button>
                <button class="timeButton" data-time="In 1 hour">In 1 hour</button>
                
                <div>
                <button class="confirmButton" id="confirmbutton14" data-modal="sizeModal14" databeverage="Grape Latte" >Confirm the order</button>
                </div>

            <button class="closemodalbutton" data-modal = "sizeModal14">&times;</button>
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