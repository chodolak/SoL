<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home | Sliver of Light Photography</title>
        <link rel="stylesheet" href="style/base.css" media="screen">
        <link rel="stylesheet" href="style/baseprint.css" media="print">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/lightbox-2.6.min.js"></script>
    </head>

    <body>
        <div id="wrapper">

            <!-- logo -->
            <a href="index">
                <div id="logo">
                    <p>Logo</p>
                </div>		
            </a>

            <!-- header -->
            <div id="header">
                <svg id="title" xmlns="http://www.w3.org/2000/svg" pointer-events="none"></svg>


            <a href="index">
                <div id="titleLink">
                    Home
                </div>
            </a>

            </div>

            <!-- nav -->
            <?php
                include_once "navbar.php";
            ?>

            <!-- content -->
            <div id="content">
                <div id="photo"> </div>
            </div>

            <!-- footer -->
            <div id="footer">
                <p>Copyright &copy; 2014 Sliver of Light Photography</p>
            </div>

        </div>

    </body>
</html>