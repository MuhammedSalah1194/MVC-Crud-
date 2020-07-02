<?php
    class Product extends Model{
        private $table = 'products';
        private $conn;

        public function __construct(){
            $this->conn =$this->connect();
        }

        public function getAll(){
            return $this->conn->get($this->table);
        }

        public function insert($data){
            return $this->conn->insert($this->table, $data);
        }

        public function delete($id){
            $db = $this->conn->where('id', $id);
            return $db->delete($this->table);
        }

        public function edit($id){

            $db = $this->conn->where ("id", $id);
            return $db->getOne ($this->table);
        }

        public function uptodate($id, $data){
            $db = $this->conn->where('id', $id);
            return $db->update($this->table, $data);
        }
    }