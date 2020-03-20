<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bästa Hemsidan</title>
    <link rel="stylesheet" href="./assets/css/hemsida.css"> <!--Hämtar hur hemsidan ska se ut från CSSen här.-->

    <script src="http://code.jquery.com/jquery-latest.js"></script>  <!--Hämtar den senaste koden för att förbereda för andra scripts.-->

<!--Hela denna scripten nedanför uppdaterar date.php filerna som innehåller datum kod.-->
    <script>
        $(document).ready(function(){  //Gör redo koden i dokumentet.
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
                }, 1000);
            });
        </script>

</head>
<body>
    <div id="wrapper"> <!--Skapar ett id namngett wrapper.-->
        <nav class="topnav">
            <a href="./index.php">Home</a>
            <a class="active" href="javascript:void(0)">Lässidan</a>
            <b id="div_date"></b>
            <b id="div_navbar"></b>
        </nav>
        <main>
            <div class="hello">
            <article>
                <h1>Lässidan</h1>
                <img src="https://cdn.pixabay.com/photo/2019/03/09/22/36/dog-4045119_960_720.jpg" alt="Nyfiken hund"><br>
                <span>
                    Du gillar hunden va???????
                </span>
                <p><i>Publicerad den 14/1-2020</i></p>
            </article>
            </div>
        </main>
    </div>
</body>
</html>
