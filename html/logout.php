<?php
session_start();
session_destroy();
$_SESSION["user"] = null;
header('Location: /'); ?>
