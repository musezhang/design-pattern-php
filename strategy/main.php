<?php

require "./action.php";
require "./manager.php";

$player = new manager(new football());

$player->playsports();