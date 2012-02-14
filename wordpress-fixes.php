<?php

// used this to fix redirect issues on a SU/MU wordpress in a subdirectory
$_SERVER[ 'REQUEST_URI' ] = $_SERVER[ 'HTTP_X_ORIGINAL_URL' ] . "/wordpress/";

?>