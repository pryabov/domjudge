<?php declare(strict_types=1);
/**
 * Toggle automatic page refresh.
 *
 * Part of the DOMjudge Programming Contest Jury System and licenced
 * under the GNU GPL. See README and COPYING for details.
 */

require('init.php');

if (empty($_SERVER['HTTP_REFERER'])) {
    die("Missing referrer header.");
}

dj_setcookie('domjudge_refresh', $_REQUEST['enable']);

header('Location: ' . $_SERVER['HTTP_REFERER']);
