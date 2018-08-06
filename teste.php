<?php
/*
 * Inicio da exprecao /^ $/
 * para ignorar case sencitive da string usa-se i depois de $/
 * determinar um grupo de elemento numerico aceitos /^ [0-9]{1,5}$/ os parametros entre chaves refere-se a ocorrencia, ou seja a qtd minima e Max de numeros
 * A ocorrencia pode variar entre {1,},{0,}
 * Aceita letras e numeros '/^[a-zA-z0-9]{0,}$/'
 * ?={0,1}
 * *{0,}
 * +{1,}
 * Email='/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',
 */
$string='email@gmail';
if(preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$string)){
     echo 'Accept';
}else {
     echo "Error";
}