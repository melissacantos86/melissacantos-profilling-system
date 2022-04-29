<!-- endpoints -->
<?php include __DIR__ . '/endpoint.php'; ?>


<?php

if ($user_type == 'Student') {
    goLocation('./student_profile.php');
}
?>


<!-- header -->
<?php include $_PATH['admin']['header']; ?>


<!-- wrapper -->
<div class="wrapper">

    <!-- nav -->
    <?php include $_PATH['admin']['nav']; ?>


    <!-- main -->
    <main class="app_main">
        <!-- content -->
        <!-- get pages dynamically -->
        <?php
        // include the current source 
        include isset($_GET['source']) ? get_pages($_GET['source']) : get_pages();
        ?>
    </main>
</div>


<?php include $_PATH['admin']['footer']; ?>