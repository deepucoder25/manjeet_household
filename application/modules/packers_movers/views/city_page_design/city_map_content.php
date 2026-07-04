<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

$lat = '';
$lon = '';
if (isset($cities) && isset($city)) {
    foreach ($cities as $ct) {
        if (@$ct['nm'] == $city) {
            $lat = $ct['lat'];
            $lon = $ct['lon'];
            break;
        }
    }
}

if (isset($city) && strtolower($city) == "bhopal") {
   $mapcontent = '<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4195.120374323953!2d77.43471583647897!3d23.288766339670527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDE3JzE5LjYiTiA3N8KwMjYnMTUuNCJF!5e0!3m2!1sen!2sin!4v1783146603904!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>';
} else {
   $mapcontent = "<iframe
              width='100%'
              height='400'
              class='pm-city-map-iframe'
              loading='lazy'
              allowfullscreen
              src='https://www.google.com/maps?q=" . $lat . "," . $lon . "&hl=en&z=12&output=embed'>
          </iframe>";
}
?>