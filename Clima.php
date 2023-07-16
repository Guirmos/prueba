  <html>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorin>
  <?php
    $estado=$_POST['estado'];
    // $apiurl='http://dataservice.accuweather.com/locations/v1/cities/search?apikey=Aqui Se Colocara la key  de ustedes &q=' .$estado;
    $apiurl='http://dataservice.accuweather.com/currentconditions/v1/topcities/apikey=pH2kuVGG3lIAG2xN1zGEPfOjNnAitPqr' .$estado;
    $content = file_get_contents($apiurl);
    $jsonobjeto = json_decode($content);
    $dato = $jsonobjeto[0];

    echo "La ciudad" .$dato -> LocalizedName. " es bonita";
    echo "<br>";

    $apiurl2 = 'http://dataservice.accuweather.com/currentconditions/v1/'.$dato 
    -> Key.'pH2kuVGG3lIAG2xN1zGEPfOjNnAitPqr';

    $content2 = file_get_contents($apiurl2);
    $jsonobjeto2 = json_decode($content2);
    $dato2 = $jsonobjeto2[0];

    $clima = $dato2 -> Temperature;
    print_r($clima -> Metric -> Value);
    ?>
    </html>
