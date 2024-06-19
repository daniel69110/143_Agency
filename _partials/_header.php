<header>

        <div class="bloc-1">
            <img src="/assets/images/logo3.0.png" alt="" class="logo">
            <a href="home" class="home">Home</a>

        </div>

        <!-- START NAV -->
        <nav>

            <a href="#appartment" class="appartment">Apartment</a>
            <a href="#house" class="house">House</a>
            <a href="#favorite" class="favorite">My favorites</a>
            <a href="#contact" class="contact">Contact us</a>
            <?php if (!isset($_SESSION['username'])): ?>
                
                <a href="_partials/login.php">Login</a>
                <a href="security/signin.php">Signin</a>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['username'])): ?>
                <a href= /_partials/listings/_form.php>Add Announcement</a>
                <a href="/_partials/_logout.php">Logout</a>
            <?php endif; ?>
            
            
            
        </nav>
        <!-- END NAV -->

    </header>