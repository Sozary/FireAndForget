<?php
require "./FireAndForget.php";

$fire_and_forget = new FireAndForget();

$fire_and_forget->post("http://localhost:1234/receive.php", ["data" => 69]);
