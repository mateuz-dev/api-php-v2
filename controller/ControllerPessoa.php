<?php

    class ControllerPessoa{

        private $_method;
        private $_modelPessoa;


        # M É T O D O   C O N S T R U T O R
        public function __construct($model){
            $this->_modelPessoa = $model;
            $this->_method = $_SERVER['REQUEST_METHOD'];
        }


        public function router() {

            switch ($this->method) {
                case 'value':
                    # code...

                break;
                

                default:
                    # code...
                    
                break;
            }

        }

    }

?>