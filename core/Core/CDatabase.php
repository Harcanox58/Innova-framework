<?php
class CDatabase extends PDO
{
    public function __construct()
    {
        parent::__construct("mysql:host=" . DB_HOST .
            ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CSET, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false));
    }

}
