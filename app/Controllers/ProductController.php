<?php
    class ProductController{

        public function index(){
            $db = new Product();
            $data['products'] = $db->getAll();    
            View::load('product/index',$data);
        }

        
        public function add(){      // Add New Product - View Add Page
            
            View::load('product/add');
        }

        /* Get Data From ( Form ) Store Product Info */
        public function store(){
            if(isset($_POST['submit'])):
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $qty = $_POST['qty'];
                $data = Array ("name" => $name,
                        "price" => $price,
                        "desc" => $desc,
                        "qty" => $qty
                    );
                $db = new Product();
                if($db->insert($data)){
                    View::load('product/add',['success'=>'Data Created SuccessFully']);
                }else{
                    View::load('product/add');
                    }
            endif;
        }

        public function edit($id){  // Edit Product
            $db = new Product();
            if($db->edit($id)){
                $data['row'] = $db->edit($id);
                View::load('product/edit',$data);
            }else{
                echo "Error";
            }
            
        }


        public function update($id){
            if(isset($_POST['submit'])):
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $qty = $_POST['qty'];
                $datainsert = Array ("name" => $name,
                        "price" => $price,
                        "desc" => $desc,
                        "qty" => $qty
                    );
                    $db = new Product();
                if($db->uptodate($id, $datainsert)){
                    View::load('product/add',['success'=>'Data Updated SuccessFully','row'=>$db->edit($id)]);
                }else{
                    View::load('product/edit',['row'=>$db->edit($id)]);
                    }
            endif;
        }

        public function destroy($id){  // Delete Product 
            $db = new Product();
            if($db->delete($id)){
                View::load('product/delete');
            }else{
                echo '<h3 class="alert alert-danger text-center">Error</h3>';
            }
        }

    }