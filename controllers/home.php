<?php

$template->set('title', CI_TITLE);
$template->place('header');
$template->inject('home/header.php');
$template->inject('home/home.php');
$template->inject('home/footer.php');
$template->place('footer');