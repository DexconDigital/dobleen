<?php

function Conect()
{
    try {
        $echo2 = new PDO('mysql:host=localhost;dbname=dobleen', 'root', '');
        $echo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $echo2;
        
    } catch (Exception $e) {

        die('Error:' . $e->getMessage());
    }
}

?>