<?php   

    require_once (LIBS.'DB/MysqliDb.php');    

    class Model{
        protected $db ;

        public function connect(){
            $databsae = new MysqliDb (HOST, USER, PASS,DBNAME);

                if(!$databsae->connect()){
                    $this->db = $databsae;
                    return $this->db;
                }else{
                    echo "Error";
                }         
         }
    }