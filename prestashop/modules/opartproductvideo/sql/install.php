<?php

	// Init
	$sql = array();

	// Create Table productvideo
	$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'opartproductvideo` (
		  `id_opartproductvideo` int(10) NOT NULL AUTO_INCREMENT,		  
		  `title` varchar(256),
		  `className` varchar(256),
		  `anchorName` varchar(256),
		  `width` int(4),
		  `height` int(4),
  		PRIMARY KEY (`id_opartproductvideo`)
		) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
	
	// Create Table productvideo_lang
	$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'opartproductvideo_lang` (
		  `id_opartproductvideo` int(10) NOT NULL AUTO_INCREMENT,
		  `id_lang` int(10) NOT NULL,
		  `link` varchar(256)  NOT NULL,
		  `publicTitle` varchar(256),
		  `desc` longtext,
  		UNIQUE KEY `opartproductvideo_lang_index` (`id_opartproductvideo`,`id_lang`)
		) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
	
	//create table productvideo_product
	$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'opartproductvideo_product` (
	`id_opartproductvideo` int(10) NOT NULL AUTO_INCREMENT,
	`id_product` int(10) NOT NULL,
	UNIQUE KEY `opartproductvideo_product_index` (`id_opartproductvideo`,`id_product`)
	) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';