<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Epam test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/app/template/site/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/app/template/site/css/index.css">

</head>
<body>
<div class="wrapper">
    <!-- Header -->
    <header class="header fixed">
        <div class="container">
            <div class="header__wrapper">
                <div class="header_logo">
                    <a href="/">EPAM PHP TEST</a>
                </div>
                <nav class="header_menu">
                    <ul class="menu__wrapper">
                        <li class="menu_item">
                            <a href="/" class="menu_link">Main</a>
                        </li>
                        <li class="menu_item">
                            <a href="/create" class="menu_link">Create Payroll</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Main section -->
    <section class="section main fix_headline block">
        <div class="container">
            <?= $content ?>
        </div>

    </section>
    <!-- End of main -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

</body>
</html>









