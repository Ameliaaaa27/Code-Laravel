<?php

class MyDatabase {
    // ...

    public function __construct() {
        $this->server   = DB_SERVER;
        $this->username = DB_USERNAME;
        $this->password = DB_PASSWORD;
        $this->database = DB_DATABASE;
        $this->konekServer();
    }

    public function getOne($strQuery) {
        $this->eksekusiQuery($strQuery);
        return mysql_fetch_object($this->hasilQuery());
    }
}
