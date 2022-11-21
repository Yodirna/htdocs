<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTER</title>
</head>
<body>
    <div class="footer-basic">
            <footer>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a <?= ($site == "imprint") ? "active" : "" ?> href="?site=imprint">Imprint</a>
                    </li>
                    <li class="list-inline-item">
                        <a <?= ($site == "faq") ? "active" : "" ?> href="?site=faq">Faq</a>
                    </li>
                    <li class="list-inline-item"><a href="#">Terms of service</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">© HILLTON 2022</p>
            </footer>
</body>
</html>