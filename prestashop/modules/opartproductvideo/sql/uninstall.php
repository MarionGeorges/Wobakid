<?php
	// Init
	$sql = array();
	$sql[] = 'SET foreign_key_checks = 0;';
	$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'opartproductvideo`;';	
	$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'opartproductvideo_lang`;';
	$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'opartproductvideo_product`;';
	$sql[] = 'SET foreign_key_checks = 1;';
