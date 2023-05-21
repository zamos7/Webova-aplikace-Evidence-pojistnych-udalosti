<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Udalosti</title>
    </head>
    <body>
        <header>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Montserrat:500');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0; 
            font-family: "Montserrat", sans-serif;
            font-weight: 500; 
        }

        body{
            background-color: rgb(20, 22, 21);
        }

        li, a{
            font-size: 16px;
            color: #edf0f1;
            text-decoration: none;
        }

        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
            background-color: rgb(20, 22, 21);   

        }

        .logo{
            width: 150px;
            cursor: pointer;
            margin-right: -4.5%;
    
        }

        .navigace{
         list-style: none;
        }

        .navigace li{
            display: inline-block;
            padding: 0px 50px;
            margin-bottom: 10px;
        }

        .navigace li a:hover {
            color: #0047b3
        }

        #logbuton{
            padding: 9px 19px ;
            margin-bottom: 10px;
            background-color: #1a75ff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            color: #edf0f1;
            text-decoration: none;
    
        }

        #logbuton:hover{
            background-color: #005ce6;
        }

        #prihlasen{
            color: #919191;
            font-size: 12px;
            text-align: center;
            margin: -65px 94px;
            margin-left: 80%;
            padding: 19px ;

        }

        h1{
            text-align: center;
            margin: 60px 0px;
            margin-left: -47%;
            padding: 19px ;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
        }

        #obsah{
            margin: -40px 25%;
            font-size: 17px;
            color: #edf0f1;
        }

        footer{
            background-color: black;
            text-align: center;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
            margin: 50px 0px 0px 0px;
        }

        #ftext{
            font-size: 20px;
            
        }

        .ficon{
            width: 25px;
            margin: -8px 5px;
            
        }



        </style>
            <img class="logo" src="logo.png" alt="logo">
            <nav>
                <ul class="navigace">
                    <li><a href="PojistovaciAPP.php">Pojištěnci</a></li>
                    <li><a href="Pojisteni.php">Pojištění</a></li>
                    <li><a href="Udalosti.php">Události</a></li>
                    <li><a href="Kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
            <a class="Menu" href="logout.php"><button id="logbuton">Logout</button></a>
        </header>
        <p id ="prihlasen"><?php echo $user_data['uzivatel_jmeno'];?> </p>

        <h1>Události</h1>
        <p id="obsah">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt maximus laoreet. Praesent ut gravida dui. Donec malesuada, nunc quis pellentesque commodo, est quam pulvinar risus, non gravida massa mi pellentesque ipsum. Sed vestibulum eleifend metus, et efficitur ante dictum venenatis. Maecenas quis magna vestibulum tortor tempor pretium in in mi. Cras ac urna dignissim, varius risus sit amet, mattis leo. Sed <br> cursus tortor nunc, in imperdiet ligula faucibus eu. Pellentesque molestie, dolor ut efficitur varius, mi arcu vehicula sapien, eu porttitor nisi eros a eros. Morbi aliquam nibh tempor, consectetur arcu vitae, iaculis orci. Phasellus felis dui, pellentesque a ornare a, aliquam eu nunc. Etiam vel tempus sapien.<br><br>Aliquam arcu libero, aliquam ac blandit at, dignissim sed nibh. Sed gravida dolor sed aliquam venenatis. Cras sagittis in lorem sed viverra. In hac habitasse platea dictumst. Nunc vestibulum <br>augue non magna dapibus ultricies. Vivamus sed eleifend felis. Vestibulum scelerisque lorem ac sem laoreet, nec tempor neque mattis.<br><br>Praesent commodo mauris vitae lectus accumsan, in congue est venenatis. Quisque imperdiet orci at magna lobortis sollicitudin. Fusce vel nunc sagittis, pharetra orci a, dignissim massa. In pharetra, <br><br>tellus eu aliquam commodo, nibh justo gravida felis, sit amet hendrerit odio nulla quis nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Mauris facilisis felis sit amet porta rhoncus. Mauris malesuada semper mauris. Donec rutrum egestas consectetur. Donec eget aliquet nulla, non pulvinar diam. Integer a mauris leo. Vivamus nec mi leo.<br><br>Integer consequat eros vitae mi fringilla, ac mattis elit efficitur. Fusce porta tortor eget mauris eleifend finibus. Nullam <br>efficitur ligula vel odio vehicula, et elementum dui mollis. Phasellus et urna mi. Duis eu commodo nibh, commodo volutpat velit. Vivamus sagittis tortor vel massa posuere, vitae ultrices eros ullamcorper. Nam ac nunc sit amet tortor mollis commodo.<br> Quisque varius mattis velit non sagittis. Nullam nec nulla eu tellus aliquam viverra. Cras pretium posuere ligula suscipit euismod. <br>Fusce posuere elit ut felis sagittis bibendum. Nam enim ex, maximus nec lacus non, dictum blandit leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed <br><br>vel ante sit amet quam ornare facilisis nec vel felis. Cras purus dui, mollis vel rhoncus eu, cursus a metus.<br><br>Suspendisse iaculis ultricies risus. Pellentesque iaculis ullamcorper justo, eu porttitor nibh lobortis et. Morbi sodales felis nunc, sed consectetur dui interdum eu. Aliquam tempus auctor tempor. Suspendisse euismod ex sem, et accumsan metus feugiat et.<br> Integer vel hendrerit nisi. Morbi a nulla faucibus, facilisis purus vitae, scelerisque ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc bibendum nulla sit amet mauris venenatis fermentum. Aenean semper tincidunt est, eu lobortis magna tincidunt et. Aenean dictum lorem a blandit accumsan. Quisque eget tortor vel tortor vehicula venenatis et sit amet neque.</p>
    </body>
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>