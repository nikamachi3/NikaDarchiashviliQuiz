<?php
    function meoregverdi(){
        if(strlen($_POST["name"]) < 2 || strlen($_POST["name"]) > 20){
            echo "<br> saxeli ar unda iyos 2 asoze patara da 20 asoze didi";
        }
        else{
            echo "<table> <tr> <td>".$_POST["name"]."</td> </tr> </table>";
        }
        
        if(strlen($_POST["surname"]) < 3 || strlen($_POST["surname"]) > 50){
            echo "<br> gvari ar unda iyos 3 asoze patara da 50 asoze didi";
        }
        else{
            echo "<table> <tr> <td>".$_POST["surname"]."</td> </tr> </table>";
        }
        if(strlen($_POST["numb"]) != 11){
            echo "<br> kodi unda iyos 11 simbolosgan shemdgari";
        }
        else{
            echo "<table> <tr> <td>".$_POST["numb"]."</td> </tr> </table>";
        }
        if(strlen($_POST["location"]) > 70){
            echo "<br> misamarti ar sheidzleba iyos 70 simboloze grdzeli";
        }
        else{
            echo "<table> <tr> <td>".$_POST["location"]."</td> </tr> </table>";
        }
        echo "<table> <tr> <td>".$_POST["mobiluri"]."</td> </tr> </table>";
        echo "<table> <tr> <td>".$_POST["info"]."</td> </tr> </table>";
    }
       
?>