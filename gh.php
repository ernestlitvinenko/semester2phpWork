<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эрнест Литвиненко 211-323</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <div class="container row mx-auto pt-4">
        <div class="header__logo col-md-4 col-12">
                <img src="https://mospolytech.ru/local/templates/main/dist/img/logos/mospolytech-logo-white.svg" alt="mospolytech_logo">
            </div>

            <div class="header__title col">
                <p>Feedback form</p>
            </div>
        </div>
        </div>
    </header>
    <main>
        <pre><?php var_dump(get_headers("https://httpbin.org/post"));?></pre>
    </main>
    <?php include 'footer.php'?>
</body>
</html>