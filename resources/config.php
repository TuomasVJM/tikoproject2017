<?php
/*

 */
$config = array(
    "db" => array(
        "dbname"    => "tiko2017db2",
        "username"  => "",
        "password"  => "",
        "host"      => "dbstud2.sis.uta.fi",
        "port"      => "5432"
    ),
    "dbconnection" => "",
);

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

?>