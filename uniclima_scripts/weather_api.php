<?php

    include 'clima.php';

    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';

    $parms = array(
        'q' => $cidade,
        'appid' => '', //coloque a SUA chave de API
        'units' => 'metric',
        'lang' => 'pt_br' 
    );

    $url = 'https://api.openweathermap.org/data/2.5/weather?';

    $url = $url . http_build_query($parms);

    if(get_http_response_code($url) == 200) {
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $clima = new Clima();
        $clima->__set('temp', str_replace('.', ',', $data['main']['temp']));
        $clima->__set('temp_min', str_replace('.', ',', $data['main']['temp_min']));
        $clima->__set('temp_max', str_replace('.', ',', $data['main']['temp_max']));
        $clima->__set('feels_like', str_replace('.', ',', $data['main']['feels_like']));
        $clima->__set('description', $data['weather'][0]['description']);
        $clima->__set('icon', $data['weather'][0]['icon']);
        $clima->__set('humidity', $data['main']['humidity']);
        $clima->__set('pressure', $data['main']['pressure']);
        $clima->__set('wind_speed', $data['wind']['speed']);
        $clima->__set('wind_deg', $data['wind']['deg']);

    } else {
        $clima = null;
    }

    function get_http_response_code($url) {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }
?> 