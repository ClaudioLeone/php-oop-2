<header>
    <h1 id="title">Bool<span class="lime">PET</span>Shop</h1>
</header>

<main>
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($products as $key => $product) { ?>
                <div class="ms-card card mb-5">
                    <img src="" class="card-img-top my-3" alt="">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><?php echo $product->name; ?></h5>
                        <a href="#" class="btn btn-success my-3">Purchase</a>
                        <h6>Price: <?php echo $product->price; ?> €</h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>