<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $uzivatel_jmeno = $_POST['uzivatel_jmeno'];
        $heslo = $_POST['heslo'];

        if(!empty($uzivatel_jmeno) && !empty($heslo) && !is_numeric($uzivatel_jmeno))
        {
            $uzivatel_id = random_num(20);
            $query = "insert into uzivatele (uzivatel_id,uzivatel_jmeno,heslo) values ('$uzivatel_id','$uzivatel_jmeno','$heslo')";    

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else 
        {
            echo "neplatna informace!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
    </head>
    <body>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Montserrat:500');

            * {
                margin: 0;
                padding: 0;
                font-family: "Montserrat", sans-serif;
                text-decoration: none;
                font-weight: 500;
            }

            h1{
                color: #edf0f1;
            }
    
            li, a, button {
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

            body{
                background-color: #202020;
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

            button{
                padding: 9px 25px ;
                margin-bottom: 10px;
                background-color: #1a75ff;
                border: none;
                border-radius: 50px;
                cursor: pointer;
            }

            button:hover{
                background-color: #005ce6;
            }

            #button{
                padding: 9px;
                text-align: center;
                background-color: #1a75ff;
                border: none;
                cursor: pointer;
                font-size: 16px;
                color: #edf0f1;
                text-decoration: none;
            }

            #button:hover{
                background-color: #005ce6;
            }

            #text{
                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
            }

            #loginBox{
                background-color: #202020;
                text-align: center;
                padding: 20PX;
                
            }
            
            #textLogin{
                margin: 10px 65px;
                color: #edf0f1;
            }

            #textLogin:hover{
                color: #0047b3;
            }

            footer{
                background-color: black;
                text-align: center;
                font-size: 30px;
                color: #edf0f1;
                text-decoration: none;
                margin: 300px 0px 0px 0px;
            }


            #ftext{
                font-size: 20px;
                
            }

            .ficon{
                width: 25px;
                margin: -8px 5px;
                
            }

             
             

        </style>
        <header>
            <img class="logo" src="logo.png" alt="logo">
                <nav>
                    <ul class="navigace">
                        <li><a href="#">Pojištěnci</a></li>
                        <li><a href="#">Pojištění</a></li>
                        <li><a href="#">Události</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </nav>
            <a class="cta" href="login.php"><button>Login</button></a>
        </header>
        <main>
            <article>
                <div id="loginBox">
                    <form method="post">
                        <div style="margin: 10px 14px;color: #edf0f1;font-size: 25px;">Registrovat</div>

                        <input id="text" type="text" name="uzivatel_jmeno" placeholder="Jmeno"><br><br>
                        <input id="text" type="password" name="heslo" placeholder="Heslo" ><br><br>

                        <input id="button" type="submit" name="Login"><br><br>

                        <a id="textLogin" href="login.php">Login</a><br><br>
                    </form>
                </div>
            </article>
        </main>
    </body>
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>		