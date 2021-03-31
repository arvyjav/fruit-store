<?php

include('config.php');

$google_client->revokeToken();
session_destroy();
header('location: logingoogle.php');

?>