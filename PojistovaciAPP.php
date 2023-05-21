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
            font-size: 1em; 
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

        #novyPojistenec{
            margin: -50px 0px;
            text-align: center;

        }

        #novyPojistenecTlacitko{
            padding: 15px 15px ;
            background-color: #1a75ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #edf0f1;

        }

        #novyPojistenecTlacitko:hover{
            background-color: #005ce6;
            
        }

        table {
            margin: 70px 0;
            text-align: left;
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
            color: #edf0f1;
            margin:0px 10px;
        }

        #EditovatButton:hover{
            background-color: #cfa633;
        }

        #PojištěníButton{
            padding: 10px 10px ;
            background-color: #1a75ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #edf0f1;
        }

        #PojištěníButton:hover{
            background-color: #005ce6;
            
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



        #posunovaciTlacitka{
            margin:50px;
            text-align: center;
            
        }

        #tlacitkoDalsi{
            color: #6271f3;
            padding: 5px 10px;
            border: 0.5px solid #8c8c8c;
            cursor: pointer;
            font-size: 1em;
            border-top-right-radius:  7px;
            border-bottom-right-radius: 7px;
            background-color: #ffffff;
        }

        #tlacitkoDalsi:hover{
            background-color: #b1b1b1;
            color: #3621f1;
        }

        #tlacitkoPredchozi{
            color: #6271f3;
            padding: 5px;
            border: 0.5px solid #8c8c8c;
            cursor: pointer;
            border-top-left-radius:  7px;
            border-bottom-left-radius: 7px;
            background-color: #ffffff;
        }

        #tlacitkoPredchozi:hover{
            background-color: #b1b1b1;
            color: #3621f1;
        }


        #tlacitkaCisla{
            color: #6271f3;
            padding: 5px 7px;
            width: 30px;
            cursor: pointer;
            border: 0.1px solid #8c8c8c;
            background-color: #ffffff;
            
        }

        #tlacitkaCisla:hover{
            background-color: #b1b1b1;
            color: #3621f1;
        }

        footer{
            background-color: black;
            text-align: center;
            font-size: 30px;
            color: #edf0f1;
            text-decoration: none;

        }

        h4{
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

        <h1>Pojištěnci</h1>
        <div id= "novyPojistenec">
        <a href="NovyPojistenec.php"><button id="novyPojistenecTlacitko">Nový Pojištěnec</button></a>
        </div>

        <table width = "1020">
            <thead>
                <tr>
                    <th width = "340">Jméno</th>
                    <th width = "340">bydliště</th>
                    <th width = "340"></th>
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
        
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td><u><a href='Detail.php?id=$row[id]' id='stylJmeno'>" . $row["jmeno"] . ' ' . $row["prijmeni"]  . "</a></u></td>
                        <td>" . $row["ulice"] . ' ' . $row["cislo_popisne"]  .  "</td>
                        <td><a href='delete.php?id=$row[id]'><button id='odstanitButton' class='potvrzeni'>Odstranit</button></a>
                        <a href='editovat.php?id=$row[id]'><button id='EditovatButton'>Editovat</button></a>
                        <a href='Detail.php?id=$row[id]'><button id='PojištěníButton'>Pojištění</button></a></td>
                    </tr>";    
                }
                ?>

                <script>
                    var elems = document.getElementsByClassName('potvrzeni');
                    var potvrd = function (e) {
                    if (!confirm('!!! Opravdu chcete odstranit uživatele? !!!')) e.preventDefault();
                    }
                    for (var i = 0, l = elems.length; i < l; i++) {
                        elems[i].addEventListener('click', potvrd, false);
                    }
                </script>


            </tbody>
        </table>
        <div id="posunovaciTlacitka">
            <button id="tlacitkoPredchozi"  href="#">Předchozí</button><button id="tlacitkaCisla"  href="#">1</button><button id="tlacitkaCisla"  href="#">2</button><button id="tlacitkaCisla"  href="#" >3</button><button id ="tlacitkoDalsi"  href="#">další</button>
        </div>
    </body>
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>

	