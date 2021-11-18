<?php

    class Connection{

        private $_dbHostName = "127.0.0.1";
        private $_dbName = "cadastro";
        private $_dbuserName = "root";
        private $_dbpasswrod = "bcd127";
        private $_conn;


        # M É T O D O   C O N S T R U T O R
        public function __construct() {
            try {
                $this->_conn = new PDO("mysql:host=$this->_dbHostName;dbname=$this->_dbName;",
                                        $this->_dbuserName, $this->_dbpasswrod);
                                        $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            } catch (PDOException $e) {
                echo "CONNECTION ERROR" . $e->getMessage();
            }
        }


        public function returnConnection(){
            return $this->_conn;
        }
    }

?>