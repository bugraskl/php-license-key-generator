<?php

function generate_license_key($segmentLength = 5) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // List of allowed characters
    $segments = array(); // Create an array for the parts of the key
    for ($i = 0; $i < $segmentLength; $i++) { // Create the segments
        $segment = "";
        for ($j = 0; $j < 4; $j++) { // Create 4 characters in each segment
            $segment .= $chars[rand(0, strlen($chars) - 1)];
        }
        $segments[] = $segment;
    }
    $license_key = implode("-", $segments); // Assemble the pieces
    return $license_key;
}
