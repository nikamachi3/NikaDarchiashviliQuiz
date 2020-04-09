<?php
    include "meoregverdi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="pieichpi.php" method="post">
        saxeli <input type="text" name="name">
        <br>
        <br>
        gvari <input type="text" name="surname">
        <br>
        <br>
        kodi <input type="number" name="numb">
        <br>
        <br>
        misamarti <input type="text" name="location">
        <br>
        <br>
        mobiluris nomeri <input type="number" name="mobiluri">
        <br>
        <br>
        damatebiti informacia <input type="text" name="info">
        <br>
        <br>
        <input type="submit" name="subm">
    </form>

    <?php
        if(isset($_POST["subm"])){
            meoregverdi();
        }
    ?>
    
</body>
</html>