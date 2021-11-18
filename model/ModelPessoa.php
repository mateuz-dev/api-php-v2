<?php

    class ModelPessoa{
        
        private $_conn;


        # M É T O D O   C  O N S T R U T O R
        public function __construct($conn) {
            $this->_conn = $conn;
        }


        # MÉTODO - FIND ALL
        public function findAll(){
            $sql = "SELECT * FROM tbl_pessoa";
            $stm = $this->_conn->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        }

    }



?>