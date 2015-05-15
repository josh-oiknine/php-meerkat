<?php
// Notes: To be run from CLI

require_once('Meerkat.php');

// Instantiate the class with your API KEY
$meerkat = new Meerkat('YOUR-API-KEY-HERE');

/******************************************************************************
*    View list of Routes
******************************************************************************/
// print_r($meerkat->routes());


/******************************************************************************
*    View list of live broadcasts and their details
******************************************************************************/
$live = $meerkat->liveNow();
echo 'Found ' . sizeof($live->result) . ' live broadcasts...' . PHP_EOL;

/******************************************************************************
*    Loop over all the live broadcasts
******************************************************************************/
// foreach ($live->result as $broadcast) {
//     print_r($broadcast);
//
//     $bradcast_details = $meerkat->broadcastActivities($broadcast->id);
//
//     print_r($bradcast_details);
//     echo '**************************************************';
//     echo PHP_EOL;
// }

/******************************************************************************
*    Get aditional details for the first broadcast
******************************************************************************/

// Pick a random number in the array to
$random = array_rand($live->result);

// Pick our broadcast and output
$broadcast = $live->result[$random];
print_r($broadcast);

// Get additional details and output
$bradcast_details = $meerkat->broadcastActivities($broadcast->id);
print_r($bradcast_details);
