<?php
$regex = $_POST['reg'];
$words = json_decode(file_get_contents('./words.json'));
$matches = [];

foreach ($words as $word){
    if (preg_match ($regex, $word, $m))
        $matches[] = $m[0];
}

echo json_encode($matches);

