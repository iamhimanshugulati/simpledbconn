<?php

// 1. Session Start
session_start();

// 2. Session Unset & Destory
session_unset();
session_destroy();

// 3. Redirect
header("location: signin.html");
exit;

?>