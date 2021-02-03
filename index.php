
<?php $ch = curl_init();

     //définit l'url utilisé pour les requêtes//
    curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');

    //true pour que PHP fasse un HTTP POST régulier.//
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_USERPWD, 'admin123' . ":" . 'test123');

    // Récupération de l'URL et affichage sur le navigateur

    $out = json_decode(curl_exec($ch));

    // Fermeture de la session cURL
    curl_close($ch);

    echo '<pre>' ;
    print_r($out);
    echo '</pre>';

?>
