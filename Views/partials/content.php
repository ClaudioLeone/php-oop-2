<div id="page">
<header>
    <h1 id="title">Bool<span class="pet-clr">PET</span>Shop</h1>
</header>

<main>
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($products as $key => $product) { ?>
                <div class="ms-card card mb-5">
                    <img src="" class="card-img-top my-3" alt="no-img">
                    <div class="card-body">
                        <h5 class="card-title mb-3 bold">
                            <?php echo $product->name; ?>
                        </h5>
                        <h6>Price: <?php echo $product->price; ?> €</h6>
                        <h6>
                            Categories: 
                            <span class="badge <?php echo $product->primaryCategory->badgeClr ?>">
                                <i class="<?php echo $product->primaryCategory->icon ?>"></i>
                                <?php echo $product->primaryCategory->name ?>
                            </span>

                            <span class="badge <?php echo $product->secondaryCategory->badgeClr ?>">
                                <i class="<?php echo $product->secondaryCategory->icon ?>"></i>
                                <?php echo $product->secondaryCategory->name ?>
                            </span>
                        </h6>
                        <div class="purchase-btn d-flex justify-content-center">
                            <a href="#" class="btn btn-success my-3 ms-button">Purchase</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
</div>