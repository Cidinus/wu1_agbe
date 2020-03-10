<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bästa Hemsidan</title>
    <link rel="stylesheet" href="./assets/css/hemsida.css">

<script src="http://code.jquery.com/jquery-latest.js"></script>


<script>
    $(document).ready(function(){ //Gör redo koden i dokumentet.
         $("#div_date").load("date.php"); //Ladda in koden från dokumentet date.php.
         //Koden här nedanför sätter ett interval som date.php ska uppdateras. Detta gör så att datumet uppdateras varje minut.
        setInterval(function() {
            $("#div_date").load("date.php");
        }, 60000);
    });
</script>


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
    
    <div id="wrapper">
        <nav class="topnav">
            <a class="active" href="javascript:void(0)">Home</a>
            <a href="./lässidan.php">Lässidan</a>
            <a href="./register.php">Registrera</a>
            <b id="div_date"></b>
            <b id="div_navbar"></b>
        </nav>
        <main>
            <div class="hello">
            <article>
                <h1>Välkommen!</h1>

                <span>
                    Titta på de övriga sidorna för mer information!<br>
                    En optisk illusion!!!
                </span><br><br>
                <img src="https://live.staticflickr.com/79/238776499_cd47bf82c3_z.jpg" alt="Hypnotisk bild"><br><br>
                <span style="color:red;"><b>En hypnotisk rörande bild!!!<br>⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓</b></span><br><br>
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/MagicSpiral.gif" alt="Hypnotisk rörande bild"><br><br>
            </article>
            </div>
        </main>
    </div>
</body>
</html>
