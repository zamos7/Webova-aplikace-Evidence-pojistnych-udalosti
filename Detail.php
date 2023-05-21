<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);

    $id = $_GET["id"];

    if($_SERVER['REQUEST_METHOD'] == "GET")
{
    if(!isset($_GET["id"]) ){
        header("Location: PojistovaciAPP.php");
        exit;
    }
    

    $sql = "SELECT * FROM pojisteni WHERE id=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if(!$row)
    {
        header("Location: PojistovaciAPP.php");
        exit;
    }

    $jmeno = $row['jmeno'];
    $prijmeni = $row['prijmeni'];
    $email = $row['email'];
    $telefon = $row['telefon'];
    $ulice = $row['ulice'];
    $cislo_popisne = $row['cislo_popisne'];
    $mesto = $row['mesto'];
    $psc = $row['psc'];
    $pojisteni_cestovni = $row['pojisteni_cestovni'];
    $pojisteni_zivotni = $row['pojisteni_zivotni'];
    $pojisteni_urazove = $row['pojisteni_urazove'];
    $pojisteni_majetkove = $row['pojisteni_majetkove'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PojistovaciApp</title>
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
            margin: 80px 0px;
            margin-left: -39%;
            padding: 19px ;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
        }

        table {
            margin: 300px 0;
            font-size: 1.2em;
            margin-left: auto;
            margin-right: auto;
        }

        table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;  
        }

        table th{
            padding: 6px 15px;
            background-color: #1a75ff

        }
        table td {
            padding: 6px 15px;
            background-color: #ffffff
            
        }

        #odstanitButton{
            padding: 10px 10px ;
            background-color: #ff0000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            color: #edf0f1;
        }

        #odstanitButton:hover{
            background-color: #990000;
        }

        #EditovatButton{
            padding: 10px 10px ;
            background-color: #e2b436;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            color: #edf0f1;
            margin:0px 10px;
        }

        #EditovatButton:hover{
            background-color: #cfa633;
        }

        #stylJmeno{
            color: #6271f3;
            font-size: 1em;
            
        }

        #stylJmeno:hover{
            color: #3621f1;
        }

        u{
            color: #6271f3;
        }

        #detail{
            font-size: 20px;
            color: #edf0f1;
            text-decoration: none;
            margin: -50px 37%;
        }

        #big{
            font-size: 35px;
        }

        #left{
            margin:-145px 70%;
        }

        .avatar{
            margin:-190px -195px;
            width:150px;
        }

        footer{
            background-color: black;
            text-align: center;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;
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

        <h1>Uzivatel</h1>
        <div id ="detail">
            <img class="avatar" src="avatar.png" alt="avatar">
            <p id ="big"><?php echo $jmeno . " " . $prijmeni;?></p><br><br>
            <p><?php echo $ulice . " " . $cislo_popisne ;?></p><br>
            <p><?php echo $mesto;?></p></td><br>
            <p><?php echo $psc;?></p><br>
            <div id="left">
                <p><?php echo $email;?></p></td><br>  
                <p><?php echo $telefon;?></p></td>
            </div>
        </div>



        <table width = "975">
            <thead>
                <tr>
                    <th width = "340">Pojištění</th>
                    <th width = "340">Částka</th>
                    <th width = "295"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connection.php");

                $user_data = check_login($con);

                $sql = "SELECT * FROM pojisteni";

                $result = $con->query($sql);
        
                if (!$result){
                    die("neplatny vstup: " . $con->error);
                }

                if($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td><u><a href='Pojisteni.php' id='stylJmeno' >Cestovní pojištění</a></u></td>
                        <td>" . $pojisteni_cestovni  ." Kč "."</td>
                        <td><a href='deletePojisteni_cestovni.php?id=$id'><button id='odstanitButton' class='potvrzeni'>Odstranit</button></a>
                        <a href='editovatPojisteni_cestovni.php?id=$id'><button id='EditovatButton'>Upravit Částku</button></a></td>
                    </tr>
                    <tr>
                        <td><u><a href='Pojisteni.php' id='stylJmeno' >Životní pojištění</a></u></td>
                        <td>" . $pojisteni_zivotni ." Kč "."</td>
                        <td><a href='deletePojisteni_zivotni.php?id=$id'><button id='odstanitButton' class='potvrzeni'>Odstranit</button></a>
                        <a href='editovatPojisteni_zivotni.php?id=$id'><button id='EditovatButton'>Upravit Částku</button></a></td>
                    </tr>
                    <tr>
                        <td><u><a href='Pojisteni.php' id='stylJmeno' >Úrazové pojištění</a></u></td>
                        <td>" . $pojisteni_urazove ." Kč "."</td>
                        <td><a href='deletePojisteni_urazove.php?id=$id'><button id='odstanitButton' class='potvrzeni'>Odstranit</button></a>
                        <a href='editovatPojisteni_urazove.php?id=$id'><button id='EditovatButton'>Upravit Částku</button></a></td>
                    </tr>
                    <tr>
                        <td><u><a href='Pojisteni.php' id='stylJmeno' >Majetkové pojištění</a></u></td>
                        <td>" . $pojisteni_majetkove ." Kč "."</td>
                        <td><a href='deletePojisteni_majetkove.php?id=$id'><button id='odstanitButton' class='potvrzeni'>Odstranit</button></a>
                        <a href='editovatPojisteni_majetkove.php?id=$id'><button id='EditovatButton'>Upravit Částku</button></a></td>
                    </tr>";    
                }
                ?>

                <script>
                    var elems = document.getElementsByClassName('potvrzeni');
                    var potvrd = function (e) {
                    if (!confirm('!!! Opravdu chcete odstranit Částku? !!!')) e.preventDefault();
                    }
                    for (var i = 0, l = elems.length; i < l; i++) {
                        elems[i].addEventListener('click', potvrd, false);
                    }
                </script>
            </tbody>
        </table>
    </body>
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>	