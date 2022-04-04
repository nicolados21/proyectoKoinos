<?php
class Database{
    public static function connect() {
        $db= new mysqli('localhost','root','','proyecto_koinos');
        return $db;
    }
    
}
?>