<div class="volvic">
    <div class="cool">
        <div class="carousel-item active">
            <img src="<?php echo $property['img'] ?> " class="d-block-w-100" alt="...">
        </div>
        <div class="lala">
            
            <?php if (!empty($_SESSION['username'])): ?>
                <?php if ($property['favorite']): ?>
                    <a class="absolute top-0 right-0 p-4" href="/_partials/listings/toggle.php?id=<?= $property['id'] ?>">
                        <img src="./assets/images/redHeart.png"
                        alt="" class="hearth">
                    </a>
                <?php else: ?>
                    <a class="absolute top-0 right-0 p-4" href="/_partials/listings/toggle.php?id=<?= $property['id'] ?>">
                        <img src="./assets/images/8150286_wishlist_save_save for later_shopping_ecommerce_icon.png"
                        alt="" class="hearth">
                    </a>
                <?php endif; ?>
            <?php endif; ?>
            <ul>
                <li><?php echo $property['bedrooms'] ?> bedrooms</li>
                <li><?php echo $property['rooms'] ?> rooms</li>
                <li><?php echo $property['area'] ?></li>
                <li><?php echo $property['price'] ?></li>
                <li><?php echo $property['city'] ?></li>
            </ul>
        </div>
    </div>
    <div class="base">

        <div class="para">
            <p> <?php echo $property['title'] ?></p>
        </div>
        <div class="rent">FOR <?php echo $property['transaction'] ?></div>
        <div class="gt">
            <a href="">
                <img src="./assets/images/134224_add_plus_new_icon.png" alt="" class="icone-1">
            </a>

            <a href="">
                <img src="./assets/images/2849834_message_letter_multimedia_mail_communication_icon.png"
                    alt="" class="letter">
            </a>
        </div>

    </div>

</div>