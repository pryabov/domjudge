<?php

/**
 * Scoreboard
 *
 * $Id$
 */

require('init.php');
$refresh = '30;url=scoreboard.php';
$title = 'Scoreboard';
include('../header.php');
include('menu.php');

// call the general putScoreBoard function from common.php
putScoreBoard($login);

include('../footer.php');
