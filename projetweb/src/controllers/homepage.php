<?php
// controllers/homepage.php

require_once('src/modele/model.php');

function homepage() {
	session_start();
	require('src/view/homepage.php');
}
