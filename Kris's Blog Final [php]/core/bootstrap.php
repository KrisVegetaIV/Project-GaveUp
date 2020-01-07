<?php

require_once __DIR__ . "/loginhandler.php";
require_once "core/post-repository.php";
require_once "core/post-class.php";
require_once "core/User.php";

$user = new User($email = 'hello', $password = 'world');
session_start();