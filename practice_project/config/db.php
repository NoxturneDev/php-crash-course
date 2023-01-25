<?php

$config_server_name = "localhost";
$config_username = "root";
$config_password = "";
$config_db_name = "feedback";

$connection = new mysqli($config_server_name, $config_username, $config_password, $config_db_name);

if ($connection->connect_error) {
  echo "trouble on connecting to database";
}
echo "connected successfully";
