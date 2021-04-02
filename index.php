<?php

function writeSecretSentence ($parametre_1 = "panthere",$parametre_2 = "lion")
{
  
    return "la $parametre_1 s'incline fasse au $parametre_2 " ;

}


echo writeSecretSentence("boa", "serpent");
 echo "<br>";
echo writeSecretSentence("sphinx","guepard");
echo "<br>";
echo writeSecretSentence("loup","lion");

