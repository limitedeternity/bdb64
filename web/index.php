<html>
    <head>
        <title>bdb64</title>
    </head>
    <body>
        <p>
        <?php 
            if (isset($_GET["decode"])) {
                echo base64_decode($_GET["decode"]);
            } elseif (isset($_GET["encode"])) {
                echo base64_encode($_GET["encode"]);
            }
        ?>
        </p>
    </body>
</html>
