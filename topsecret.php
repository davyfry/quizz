<?php

$date = $_POST['date'];
$note = 0;

if($date == '1997-10-09') {
    $note = $note + 2022;
}

echo $note;