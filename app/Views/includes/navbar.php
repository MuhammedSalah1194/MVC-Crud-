<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php url();?>"><img src="<?= BURL.'assets/images/logo.jpg'?>" width="50" height="50" style="border-radius:50%;;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php url();?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php url('product/index')?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php url('product/add')?>">Add Product</a>
        </li>
      </ul>
    </div>
</nav>