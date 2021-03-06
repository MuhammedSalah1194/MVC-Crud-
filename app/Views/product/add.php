<?php include(VIEWS.'includes/header.php');?>
    <h1 class="text-center mt-3">Create Product</h1>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                    <?php if(isset($success)):?>
                        <h3 class="alert alert-success text-center"><?=$success;?></h3>
                    <?php endif;?>

                    <?php if(isset($error)):?>
                        <h3 class="alert alert-danger text-center"><?=$error;?></h3>
                    <?php endif;?>
                <form action="<?php url('product/store');?>" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Type Name">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" id="" class="form-control" placeholder="Type Price">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="desc" class="form-control" placeholder="Type Desc">
                    </div>
                    <div class="form-group">
                        <label for="">Qty</label>
                        <input type="number" name="qty" class="form-control" placeholder="Type Num">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include(VIEWS.'includes/footer.php');?>