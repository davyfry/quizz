<?php

$animal = $_POST['animal'];
$voiture = $_POST['voiture'];
$logo = $_POST['logo'];
$date = $_POST['date'];
$note = 0;


if($animal == 'chat') {
    $note = $note + 1;
}

if($voiture == 'rouge') {
    $note = $note + 1;
}

if($logo == 'youtube') {
    $note = $note + 1;
}

if($date == '2008-07-20') {
    $note = $note + 1;
}

echo $note;