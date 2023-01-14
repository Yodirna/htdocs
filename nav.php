<nav class="navbar navbar-dark fixed-top navbar-expand-lg" style="background-color: #B85042;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">HILLTON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavButton" aria-controls="navbarNavButton" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavButton">
                <ul class="navbar-nav me-auto">
                <li class="nav-item">
                            <a class="nav-link <?= ($site == "news") ? "active" : "" ?>" href="?site=news">NEWS</a>
                        </li>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "check_bookings") ? "active" : "" ?>" href="#">BOOK A ROOM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "support_tickets") ? "active" : "" ?>" href="#">MY BOOKINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "upload") ? "active" : "" ?>" href="?site=upload">MY ACCOUNT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "logout") ? "active" : "" ?>" href="?site=logout">LOGOUT</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "booking") ? "active" : "" ?>" href="?site=booking">BOOKING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "support") ? "active" : "" ?>" href="?site=support">SUPPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "login") ? "active" : "" ?>" href="?site=login">LOGIN</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
</nav>




