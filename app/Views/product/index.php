<?php include(VIEWS.'includes/header.php');?>
    <h1 class="text-center mt-3">All Products</h1>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Quantity</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach($products as $product):?>
                        <tr>
                            <td><?=$product['id'];?></td>
                            <td><?=$product['name'];?></td>
                            <td><?=$product['price'];?></td>
                            <td><?=$product['desc'];?></td>
                            <td><?=$product['qty'];?></td>
                            <td><a href="<?php url('/product/edit/'.$product['id']);?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="<?php url('/product/destroy/' .$product['id']);?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach;?>
                </thead>
                <tbody>
                    <?php foreach($products as $product):?>
                    
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
<?php include(VIEWS.'includes/footer.php');?>