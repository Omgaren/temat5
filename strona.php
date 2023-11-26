<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forum internetowe</title>
</head>
<script>
    function myFunction(){
        var x = document.createElement("BUTTON");
    }
</script>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "form internetowe") or die("Błąd");
    $wynik = $conn-> query("SELECT * from zagadnienia")
    if($wynik->num_rows > 0){

        }else{
            echo "nie ma nic w bazie danych"
        }
    ?>
    
    <div class="gora">
        <h1>Forum internetowe</h1>
    </div>
    <div class="centrum_lewo">
    </div>
    <div class="centrum">
        <button onclik="myFunction()">kolejna zakladka</button>
    </div>
    <div class="centrum_prawo">
    </div>
<footer>
    <div class="stopka">
    </div>
</footer>
</body>
</html>