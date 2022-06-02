<?php
  $host       = "localhost";
  $username   = "app";
  $password   = "test";
  $dsn        = "mysql:host=$host;dbname=pets";
  $imageURL   = "https://pet-adoption-website.s3.amazonaws.com/";
  $options    = array(
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
