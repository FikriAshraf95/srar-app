<?php
// Example MySQL datetime value
$mysqlDatetime = '2023-05-27 10:30:00';

// Create a DateTime object from the MySQL datetime value
$datetime = new DateTime($mysqlDatetime);

// Get the day, month, and year
$day = $datetime->format('d');
$month = $datetime->format('m');
$year = $datetime->format('Y');
$date = $datetime->format('d/m/Y');

// Output the values
echo "Day: " . $day . "<br>";
echo "Month: " . $month . "<br>";
echo "Year: " . $year . "<br>";
echo "date: " . $date . "<br>";
?>