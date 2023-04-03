<?php
$api_key = '1d1ab4eed251f3ba6391e89b52474da8';
$city_name = $_GET['city'];
echo $city_name;
$api_url = "https://api.openweathermap.org/data/2.5/weather?q=$city_name&appid=$api_key";
$response = file_get_contents($api_url);
$data = json_decode($response, true);
$temperature = $data['main']['temp'];
$humidity = $data['main']['humidity'];
$windspeed = $data['wind']['speed'];
$country= $data['sys']['country'];
echo ' '. $temperature;
echo '<br>';
echo '<br>';
echo 'The Humidity is : ';
echo ' '. $humidity;
echo '<br>';
echo '<br>';
echo 'The Wind Speed is :';
echo ' '.$windspeed;
echo '<br>';
echo '<br>';
echo 'Country:';
echo ' '. $country;
?>