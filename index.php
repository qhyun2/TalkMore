<?php
  function proxyRequest() {
    $fixieUrl = getenv("FIXIE_URL");
    $parsedFixieUrl = parse_url($fixieUrl);

    $proxy = $parsedFixieUrl['host'].":".$parsedFixieUrl['port'];
    $proxyAuth = $parsedFixieUrl['user'].":".$parsedFixieUrl['pass'];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyAuth);
    curl_close($ch);
  }

  $response = proxyRequest();
  print_r($response);
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet"> 
        
        <title>Welcome</title>
</head>

<body>

    <div id="header"></div>
    <div id="content">

        <div id= "hometitle">TalkMore</div>
        <a href="register.html" id="link" class="button">Sign Up</a>
        <br>
        <a href="login.html" id="link" class="button">Log In</a>
        <br>
        <a href="about.html" id="link" class="button">How it works</a>
        
        
    </div>

    <script>
        $("#header").load("header.html");
    </script>
</body>

</html>