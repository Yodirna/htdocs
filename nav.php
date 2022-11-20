<nav class="navbar navbar-dark fixed-top navbar-expand-lg" style="background-color: #B85042;">
        <div class="container-fluid">
            <a class="navbar-brand">HILLTON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavButton" aria-controls="navbarNavButton" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavButton">
                <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "news") ? "active" : "" ?>" aria-current="page" href=".">NEWS</a>
                        </li>
                    <?php if (@$_SESSION['userid'] == 'admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "check_bookings") ? "active" : "" ?>" href="#">CHECK BOOKINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "support_tickets") ? "active" : "" ?>" href="#">SUPPORT TICKETS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "upload") ? "active" : "" ?>" href="?site=upload">UPLOAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "logout") ? "active" : "" ?>" href="?site=logout">LOGOUT</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "booking") ? "active" : "" ?>" href="#">BOOKING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "support") ? "active" : "" ?>" href="#">SUPPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($site == "login") ? "active" : "" ?>" href="?site=loginbs">LOGIN</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
</nav>




