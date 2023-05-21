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

        #hltext{
            font-size: 30px;
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
        
        <h1>Pojištění</h1>
        <div id="obsah">
            <p>
                <b id="hltext">Cestovní pojištění <br></b>Cestovní pojištění je neživotní pojištění, uzavírané mezi pojištěným (klientem) a jím vybranou pojišťovnou před cestou (ve většině případů) do zahraničí. Účelem tohoto pojištění je úhrada léčebných výloh v případě náhlého onemocnění nebo úrazu.
                Primární účel cestovního pojištění je úhrada léčebných výloh v případě náhlého onemocnění nebo úrazu v zahraničí. K pojištění ale pojišťovny také nabízejí:<br>
                <br>pojištění ztráty nebo odcizení zavazadel,<br>
                <br> pojištění odpovědnosti za škodu,<br>
                <br>pojištění trvalých následků úrazu,<br>
                <br>pojištění smrti úrazem,<br>
                <br> pojištění rizikových sportů,<br>
                <br>pojištění cestování letadlem (zpoždění a zrušení letu nebo zpoždění zavazadel).<br>
                <br>Nedílnou součástí cestovního pojištění je asistenční služba, která klientovi poradí, na jaké lékařské zařízení se v případě úrazu obrátit, a pomůže mu s komunikací v cizím jazyce. Číslo na ni klient najde na kartičce, kterou dostane k cestovnímu pojištění.[1] Tato základní služba je vždy zdarma. Existuje i možnost připlacení za nadstandardní služby, které pomohou při vzniku tíživé situace v zahraničí.
            </p>

            <br>
            <br>
            <br>

            <p>
            <b id="hltext">Životní pojištění<br></b>
                Životní pojištění je taková pojistná smlouva mezi pojistníkem (klientem) a pojistitelem (pojišťovnou), ve které se pojistitel zavazuje zaplatit určenou peněžní částku pojištěné osobě v případě jejího dožití a obmyšlené osobě v případě smrti, pojištěné osoby. Součástí životního pojištění mohou být připojištění jako pojištění pracovní neschopnosti, doby nezbytného léčení úrazu, trvalé následky úrazu, za hospitalizace, v případě invalidity 1., 2. nebo 3. stupně, závažných onemocnění a dalších připojištění. Pojištěný platí za tuto smlouvu v vpravidelných dohodnutých intervalech pojistné.<br>
                <br>Životní pojištění bez rezervotvorné složky<br>
                Cílem tohoto pojištění je pouze finančně zabezpečit klienta i osoby blízké v případě zhoršení jeho zdravotního stavu nebo jeho smrti. Tento druh pojištění je vhodný pro živitele rodiny. Součástí této pojistky není žádná rezervotvorná složka. Klient, popřípadě osoba blízká, získá peníze jen tehdy, pokud se uskuteční pojistná událost. Na toto pojištění se nevztahují žádné daňové úlevy a ani na něj nemůže přispívat zaměstnavatel. Patří sem rizikové životní pojištění, úvěrové životní pojištění nebo úrazové pojištění.<br>
                <br>Životní pojištění s rezervotvornou složkou<br>
                Na rozdíl od předchozího druhu pojištění neslouží platba pojistného pouze na krytí poplatků za sjednaná rizika, ale i k vytváření finanční rezervy. Klient obvykle získá peníze i v případě, že se žádná pojistná událost neuskuteční, a on se „dožije“ konce smlouvy. Tyto kombinované produkty jsou zpravidla velmi netransparentní a mají velmi nízké výnosy, v reálné hodnotě mnohdy i záporné. Jejich výhoda však je v tom, že je lze za jistých podmínek odečíst z daní. Po několika letech placení pojištění lze vybrat část naspořených finančních prostředků v podobě tzv. odkupného, avšak pouze v případě udělení souhlasu pojišťovnou.
            </p>

            <br>
            <br>
            <br>
            
            <p>
                <b id="hltext">Úrazové pojištění<br></b>
                Úrazové pojištění je druh pojištění, který zahrnuje výplatu pojistného plnění v případě, že v důsledku úrazu dojde k přechodnému tělesnému poškození, trvalému tělesnému poškození, či smrti pojištěného. Pojištění se může vztahovat na jednotlivce i skupinu osob. Výplata pojistného plnění po úrazu neprobíhá ihned, ale až po skončení šetření úrazu, což bývá obvykle do několika měsíců od úrazu.
                V případě trvalých následků se může jednat až o několik let, kdy se čeká například na výši trvalých následků, které pojistná událost způsobila. Úrazové pojištění má mezinárodní platnost.[1] Za úraz pojišťovny obecně považují "neočekávané a náhlé působení zevních sil nebo vlastní tělesné síly anebo neočekávané a nepřerušované působení vysokých nebo nízkých vnějších teplot, plynů, par, záření, jedů s výjimkou jedů mikrobiálních a látek imunotoxických, 
                kterým bylo pojištěnému během trvání pojištění způsobeno tělesné poškození anebo smrt". Definice není pro všechny pojišťovny stejná, lze ji vždy najít ve všeobecných pojistných podmínkách, nejčastěji v odstavci s nadpisem "Pojistná událost".
                Rozsah pojistného plnění je určen pojistnou smlouvou a je omezen horní hranicí. Zatímco úrazové pojištění obsahuje krytí pro případ úrazu, životní pojištění kryje kompletní ochranu životních rizik a obsahuje zároveň garantovanou rezervotvornou spořicí složku.
            </p>

            <br>
            <br>
            <br>

            <p>
                <b id="hltext">Majetkové pojištění<br></b>
                Pojištění majetku je souhrnné označení pro několik odvětví neživotního pojištění. Všechna jsou upravena v Hlavě III zákona o pojistné smlouvě „Soukromé pojištění věci a jiného majetku“.[1] Při těchto pojištěních poskytuje pojišťovna pojistnou ochranu majetku v případě, že dojde k jeho zničení, poškození nebo odcizení.<br>
                <br>Poškození nebo zničení věcí živelní událostí
                Živelní pohromou se rozumí událost vzniklá díky přírodním silám. Nejčastěji se jedná o povodně a vichřice, případně jejich větší formy, ale ani zemětřesení či sesuvy půdy nejsou výjimkou.
                V takovém případě se nejdříve zabezpečí majetek, aby nedošlo ke zhoršení stavu či újmě na zdraví a neprodleně se událost nahlásí pojišťovně.<br>
                <br>Zemědělské pojištění
                Zemědělská výroba je rizikovou činností a více než jiné činnosti závislá na rozmarech počasí. Pojistný program zemědělského pojištění kryje škody na zemědělských prostorech a hospodářských zvířatech, ale i na movitém a nemovitém majetku. Zemědělské pojištění chrání před ztrátou nebo poškozením plodin a hospodářských zvířat. Pojištění, jako takové, má velký potenciál, jelikož poskytuje finanční jistotu nízkorozpočtovým zemědělcům a jejich
                komunitám. Zároveň podporuje zemědělce k větším investicím a chrání je před různými nehodami, které by mohly uškodit jejich živobytí nebo ztrátou příjmů v důsledku poklesu cen zemědělských komodit.<br> 
                <br>Pojištění zásilek
                Pojištění zásilek je služba, která může odškodnit odesílatele, jejichž zásilky jsou při přepravě ztraceny, odcizeny nebo poškozeny. Někteří dopravci poskytují v rámci přepravních podmínek omezené ručení. Přezkum přesných přepravních podmínek odhalí, zda je nabídnuto omezené ručení, nebo zda si zákazník musí zvolit a zaplatit tuto službu samostatně buď prostřednictvím dopravce za dodatečné náklady, nebo prostřednictvím třetí strany tedy pojistitele. 
                Námořní pojištění zahrnuje ztrátu nebo poškození lodí, nákladu, terminálů a veškerou dopravu, kterou je majetek převáděn, získáván nebo držen mezi místy původu a konečným místem určení. Pojištění nákladu je subdodavatelem námořního pojištění, ačkoli námořní pojištění zahrnuje také majetek vystavený na pevnině a na moři ( kontejnerové terminály , přístavy, ropné plošiny , potrubí) námořní nehoda a námořní odpovědnost. Při přepravě zboží poštou nebo kurýrem se místo toho používá přepravní pojištění.<br><br>
                </div>
    </body>
    <footer>
        <br><h4>&copy;Zamykal Tomáš</h4><br>
        <p id="ftext">Kontaktní informace</p>
        <p id="ftext"><img class="ficon" src="email.png" alt="ikonaPosta">zamykal.tomas@gmail.com</p>
        <p id="ftext"><img class="ficon" src="calling.png" alt="ikonaPosta">+420 776 977 106</p><br>
    </footer>
</html>