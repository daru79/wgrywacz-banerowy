<?php

interface IConnectInfo {
    const HOST = "";
    const UNAME = "";
    const PW = "";
    const DBNAME = "";
    
    public static function doConnect();
}

?>
