<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="PHPadvance_1_css.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
    <body>

      <div class="container">
      <?php
      require 'vendor/autoload.php';

      class render
      {

        function func(&$client,&$res,&$j)
        {
          $i=0;
          foreach ($j['data'] as $key)
          {

                echo "<div class=\"parent ".$i."\">"; //DISPLAYING SERVICES IN HTML FORMAT
                echo "<div class=\"image".$i."\">";
                $image=($key['relationships']['field_image']['links']['related']['href']);
                $resImage = $client->request('GET', $image, ['headers' => ['User-Agent', 'myreader']]);
                $x=json_decode($resImage->getBody(),true);
                $dynamic=$x['data']['attributes']['uri']['url'];

                $temp="https://ir-revamp-dev.innoraft-sites.com".$dynamic;
                echo "<img src =".$temp.">";
                echo "</div>";
                echo "<div class=\"services".$i."\">";
                echo "<h2>"."<span class= \"number\">".($i+1)."</span> ".$key['attributes']['title']."</h2>";
                print_r($key['attributes']['body']['value']);
                print_r($key['attributes']['field_services']['value']);
                echo "</div>";
                echo "</div>";
                $i++;
        }
      }
    }
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services', ['headers' => ['User-Agent', 'myreader']]);
    $j=json_decode($res->getBody(),true);

    $a=new render();
    $a->func($client,$res,$j);

      ?>
      </div>

  </body>
</html>
