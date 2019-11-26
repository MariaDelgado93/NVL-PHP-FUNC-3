<?php
$frase = comprobarVocales('El veloz murcielago hindu comia feliz cardillo y kiwi');
$palabra = comprobarVocales('murcielago');

function comprobarVocales($string){
  
    if(strpos(&string, 'a') && strpos(&string, 'e') && strpos(&string, 'i') && strpos(&string, 'o') && strpos(&string, 'u')){
      if(strpos(&string, ' ')){
        echo 'TRUE';
      }else{
        echo 'LA PALABRA CONTIENE LAS 5 VOCALES';
      }
    }else{
      if(strpos(&string, ' ')){
        echo 'FALSE';
      }else{
        echo 'NO CONTIENE TODAS LAS VOCALES';
      }
    }    
}
?>
