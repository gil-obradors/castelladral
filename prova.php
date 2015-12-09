<html>
<head>
<title>My first PHP Page</title>
</head>
<body>

<?php
header("Access-Control-Allow-Origin: *");
$lellmet = file_get_contents('http://weather.noaa.gov/pub/data/observations/metar/stations/LELL.TXT');
$leblmet = file_get_contents('http://weather.noaa.gov/pub/data/observations/metar/stations/LEBL.TXT');
$legemet = file_get_contents('http://weather.noaa.gov/pub/data/observations/metar/stations/LEGE.TXT');
$lersmet = file_get_contents('http://weather.noaa.gov/pub/data/observations/metar/stations/LERS.TXT');
$lelltaf = file_get_contents('http://weather.noaa.gov/pub/data/forecasts/taf/stations/LELL.TXT');
$lebltaf = file_get_contents('http://weather.noaa.gov/pub/data/forecasts/taf/stations/LEBL.TXT');
$legetaf = file_get_contents('http://weather.noaa.gov/pub/data/forecasts/taf/stations/LEGE.TXT');
$lerstaf = file_get_contents('http://weather.noaa.gov/pub/data/forecasts/taf/stations/LERS.TXT');
echo "$lellmet" . "<br>";
echo "$leblmet" . "<br>";
echo "$legemet" . "<br>";
echo "$lersmet" . "<br>";

echo "$lelltaf". "<br>";
echo "$lebltaf". "<br>";
echo "$legetaf". "<br>";
echo "$lerstaf". "<br>";

?>


</body>
</html>
