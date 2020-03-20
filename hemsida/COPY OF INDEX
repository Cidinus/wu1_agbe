<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bästa Hemsidan</title>
    <link rel="stylesheet" href="./assets/css/hemsida.css"> <!--Hämtar hur hemsidan ska se ut från CSSen här.-->

<script src="http://code.jquery.com/jquery-latest.js"></script> <!--Hämtar den senaste koden för att förbereda för andra scripts.-->

<!--Hela denna scripten nedanför uppdaterar date.php filerna som innehåller datum kod.-->
<script>
    $(document).ready(function(){ //Gör redo koden i dokumentet.
         $("#div_date").load("date.php"); //Ladda in koden från dokumentet date.php.
         //Koden här nedanför sätter ett interval som date.php ska uppdateras. Detta gör så att datumet uppdateras varje minut.
        setInterval(function() {
            $("#div_date").load("date.php");
        }, 60000);
    });
</script>

<!--Hela denna scripten nedanför uppdaterar load.php filerna som innehåller tid kod.-->
    <script>
        $(document).ready(function(){  //Gör redo koden i dokumentet.
             $("#div_navbar").load("load.php"); //Ladda in koden från dokumentet load.php.
             //Koden här nedanför sätter ett interval som load.php ska uppdateras. Detta gör så att tiden uppdateras varje 0.1 sekund.
            setInterval(function() {
                $("#div_navbar").load("load.php");
            }, 100);
        });
    </script>
</head>

<body>
    <div id="wrapper"> <!--Hämtar utseendet från id namngett wrapper.-->
        <nav class="topnav"> <!--Hämtar utseendet från class namngett topnav.-->
            <a class="active" href="javascript:void(0)">Home</a> <!--Aktuell sida du befinner dig på.-->
            <a href="./lässidan.php">Lässidan</a> <!--Länk till lässidan.-->
            <a href="./register.php">Registrera</a> <!--Länk till registreringssidan.-->
            <b id="div_date"></b> <!--Hämtar utseendet från id namngett div_date.-->
            <b id="div_navbar"></b> <!--Hämtar utseendet från id namngett div_navbar.-->
        </nav>
        <main>
            <div class="hello"> <!--Skapar en class namngett hello.-->
            <article>
                <h1>Välkommen!</h1> <!--Rubrik.-->

                <span> <!--Text.-->
                    Titta på de övriga sidorna för mer information!<br>
                    En optisk illusion!!!
                </span><br><br>
                <img src="https://live.staticflickr.com/79/238776499_cd47bf82c3_z.jpg" alt="Hypnotisk bild"><br><br> <!--Hämtar en bild från länken.-->
                <span style="color:red;"><b>En hypnotisk rörande bild!!!<br>⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓</b></span><br><br> <!--Röd text.-->
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/MagicSpiral.gif" alt="Hypnotisk rörande bild"><br><br> <!--Hämtar en bild från länken.-->
            </article>
            </div>
        </main>
    </div>
</body>
</html>
