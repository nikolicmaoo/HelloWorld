<?php

include "funkcije/init.php";
session_destroy();
user_restriction();

redirect(location:"index.php");