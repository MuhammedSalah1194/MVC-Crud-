<?php

    /* FrontEnd Controller */
    class App{
        
        protected $controller  = 'HomeController';
        protected $action  = 'index';
        protected $params  = [];

        public  function __construct(){

            $this->prepareURL(); 
            $this->render();
        }


        /**
         * 
         * extract Controller , Method , Paramters 
         * @return Avoid 
        */
        private function prepareURL(){
            $url = $_SERVER['QUERY_STRING'];
            if(!empty($url)):
                $url = trim($url,"/");
                $url = explode('/',$url); 
                
                //Define The Controller 
                $this->controller = isset($url[0]) ? ucwords($url[0])."Controller":"HomeController";
                //echo $this->controller;
                //Define The Action
                $this->action = isset($url[1]) ? $url[1]: 'index';
                //echo $this->action;
                unset($url[0], $url[1]);
                $this->params = !empty($url)? array_values($url):[];
                //var_dump($this->params);
            endif;
        }


        private function render(){

            if(class_exists($this->controller)):

                $controller = new $this->controller();
                
                /*Method_exist(Object,Method)*/

                if(method_exists($controller, $this->action)):
                        call_user_func_array([$controller, $this->action],$this->params);
                    else:
                        echo "Method Not Exist";
                endif;
                /* End If First*/
                
            else:
            /* End If Second */
                echo "This Controller :" .$this->controller . ' Not Exists';
            endif;
        }
    }