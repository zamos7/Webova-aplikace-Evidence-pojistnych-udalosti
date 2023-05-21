<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $jmeno = $_POST['jmeno'];
        $prijmeni = $_POST['prijmeni'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $ulice = $_POST['ulice'];
        $cislo_popisne = $_POST['cislo_popisne'];
        $mesto = $_POST['mesto'];
        $psc = $_POST['psc'];


        if(!empty($jmeno) && !empty($prijmeni) && !is_numeric($jmeno))
        {
            $id = random_num(20);
            $query = "insert into pojisteni (id,jmeno,prijmeni,email,telefon,ulice,cislo_popisne,mesto,psc) values ('$id','$jmeno','$prijmeni','$email','$telefon','$ulice','$cislo_popisne','$mesto','$psc')";    

            mysqli_query($con, $query);

            header("Location: PojistovaciAPP.php");
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
        <title>Pojisteni</title>
    </head>
    <body>
        <header>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Montserrat:500');

            * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;  
        }

        body{
            background-color: rgb(20, 22, 21);
        }

        li, a{
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
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
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #edf0f1;
            text-decoration: none;
    
        }

        #logbuton:hover{
            background-color: #005ce6;
        }

        #prihlasen{
            color: #919191;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 12px;
            text-align: center;
            margin: -65px 94px;
            margin-left: 80%;
            padding: 19px ;

        }

        h1{
            text-align: center;
            margin: 60px 0px;
            padding: 19px ;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
        }
        #text{
            height: 35px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #text1{
            height: 35px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #form1{
            margin: -50px 39%;
            width: 150px;
            padding: 20PX;
        }

        #form2{
            margin: -328px 51%;
            width: 150px;
            padding: 20PX;

        }

        #button1{
            padding: 9px;
            margin: 20px -80px;
            background-color: #1a75ff;
            width: 100px;
            border: none;
            cursor: pointer;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #edf0f1;
            text-decoration: none;

        }
        
        #button1:hover{
                background-color: #005ce6;
        }

        footer{
            background-color: black;
            text-align: center;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
            margin: 430px 0px 0px 0px;
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
            <a href="logout.php"><button id="logbuton" >Logout</button></a>
        </header>
        <p id ="prihlasen"><?php echo $user_data['uzivatel_jmeno'];?></p>
        
        <h1>Nový Pojištěnec</h1>
            <form method="post">
                <div id="form1" >
                    <a>Jmeno<input id="text1"  type="text" name="jmeno" placeholder="Jmeno"></a><br><br>
                    <a>Ulice<input id="text1" type="text" name="ulice" placeholder="Ulice"></a><br><br>
                    <a>Město<input id="text" type="text" name="mesto" placeholder="Město"></a><br><br>
                    <a>Email<input id="text1" type="email" name="email" placeholder="xxxxxx@gmail.com"></a><br><br>
                </div>    
                <div id="form2" >
                    <a>Přijmení<input id="text" type="text" name="prijmeni" placeholder="Přijmení"></a><br><br>
                    <a>Čislo popisné<input id="text" type="number" name="cislo_popisne" placeholder="106"></a><br><br>
                    <a>psc<input id="text1" type="number" name="psc" placeholder="77335"></a><br><br>
                    <a>Telefon<input id="text" type="tel" name="telefon" placeholder="888111888"></a><br><br>
                    <input id="button1" type="submit" name="odeslat"><br><br> 
                </div> 
            </form>
    </body> 
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>