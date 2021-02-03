<?php

$curl = curl_init('https://fr.wikipedia.org/w/api.php?action=query&titles=Terre&prop=extracts&exchars=500&explaintext&utf8&format=json');

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data =curl_exec($curl);
if($data===false){
    var_dump(curl_error($curl));
    }
    else{

$data = json_decode($data,true);
$titre = $data ['query']['pages']['3027']['title'];
$description = $data ['query']['pages']['3027']['extract'];

    echo "
    <div class='wiki'>
        <h2>Bonjour, voici la defintion : </h2></br>
        <h3>$titre</h3></br>
        <h3>$description<h3>
         </div>";   
      
    } 
curl_close($curl);
?>