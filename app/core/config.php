<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {

    define('DBNAME', 'mydatabase');
    define('DBHOST', 'postgres');

    define('ROOT', 'http://localhost/mvc/public');
} else {
    define('ROOT', 'https://www.mywebsite.com');
}