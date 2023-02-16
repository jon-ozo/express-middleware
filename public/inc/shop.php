<?php

session_start();
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" description="Cometh the man cometh the hour book">
    <meta name="title" content="Comeththemancomeththehour">
    <meta name="title" description="Best selling book">
    <meta name="title"
        content="Cometh the man cometh the hour is a best selling book promoting the campaign for Peter Obi's presidential run">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <script defer src="../js/index.js"></script>
    <title>Cometh the man cometh the hour</title>
</head>

<body>
    <!-- main section -->
    <main>
        <section class="wrapper">
            <section>
                <!-- header starts -->
                <header class="header">
                    <!-- navigation menu -->
                    <div class="nav-menu">
                        <div class="menu-list">
                            <a href="../index.html">Home</a>
                            <a href="inc/shop.php">Shop</a>
                            <a href="../register.html">Join the movement</a>
                            <a href="../contact.html">Contact</a>
                        </div>
                    </div>

                    <!-- mobile menu -->
                    <div class="hamburger">
                        <i onclick="nav()" class="fa-solid fa-bars fa-3x"></i>
                    </div>

                    <!-- display mobile menu list -->
                    <div id="nav-menu-list" class="menu-list-wrapper hide">
                        <div class="menu-list">
                            <i onclick="nav()" class="cancel fa-solid fa-xmark fa-3x"></i>
                            <a href="../index.html">Home</a>
                            <a href="inc/shop.php">Shop</a>
                            <a href="../register.html">Join the movement</a>
                            <a href="../contact.html">Contact</a>
                        </div>
                    </div>

                    <!-- logo -->
                    <figure class="logo">
                        <img src="../img/logo320.png" width="320" height="320" alt="Logo" />
                    </figure>

                    <!-- quote -->
                    <div class="quote">
                        <h2>The Promise:</h2><br />
                        <p>
                            "I will turn Nigeria from consumption to production, and cut costs of Governance"
                        </p>
                    </div>
                </header>
            </section>
        </section>
    </main>

    <!-- body section -->
    <!-- content -->
    <section class="contents">
        <h1>All products</h1>
        <div class="products-wrapper">
            <?php
$query = "SELECT * FROM products";
$query_run = mysqli_query($conn, $query);
if ($query_run) {
    while ($row = mysqli_fetch_assoc($query_run)) {
        $id = $row['id'];
        $product_name = $row['Product_name'];
        $product_url = $row['Product_url'];
        $url = $row['Url'];
        $quantity = $row['Quantity'];
        ?>
                    <div class="products">
                        <figure>
                            <figcaption><?php echo $product_name; ?></figcaption>
                            <img src="../<?php echo $product_url; ?>" alt="<?php echo $product_name; ?>" width="300" height="300" />
                            <figcaption class="buy-button"><a href="<?php echo $url ?>">Buy now</a></figcaption>
                        </figure>
                    </div>
            <?php
}
}
?>
        </div>
    </section>

    <footer id="copyright" class="footer"></footer>

</body>

</html>
