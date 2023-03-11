<?php

$nextCarnival = date_create_from_format('Y-m-d', date('Y').'-02-08');


if($nextCarnival < date_create()){
    $nextCarnival = date_create_from_format('Y-m-d', (date('Y')+1).'-02-08');
}

$daysLeft = date_diff(date_create(), $nextCarnival)->format('%a');

echo "There are " . $daysLeft . " days left until the next Carnival.";

?>