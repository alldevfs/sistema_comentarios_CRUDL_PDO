<?php

if (!isset($_SESSION['master'])) {
	header('Location: index.php');
}