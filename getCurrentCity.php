<?php print_r( file_get_contents( "http://maps.googleapis.com/maps/api/geocode/json?latlng=" . $_GET["lat"] . "," . $_GET["lon"] . "&sensor=true" ) ); ?>