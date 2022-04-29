<!-- content -->
<section class="main-content container">

    <?php



    //  ..controller
    include __DIR__ . '/../controllers/settings.php';
    // source
    $source = ucfirst($_GET['source']);

    // include pages base on page source
    include isset($_GET['page']) ? get_pages($_GET['page']) : die();

    ?>

</section>