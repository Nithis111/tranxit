
<?php

return array(
/** set your paypal credential **/
'client_id' =>'AVPSjQbR0VdaRv2h35o6gNAFdUOM0Oe-251pPER1eX_vArda5MPI-BVXCW7uAtuMMi2OuTYsyvryexJj',
'secret' => 'ECaFz5wYBuR2kHjDXmzQM5dIVkTYT91acDPH2v74h_J0VITI9d3IdS0BwDy6xAmV2cz6k2yiHjzMXNzH',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);