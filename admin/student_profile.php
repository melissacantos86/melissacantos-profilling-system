<?php include __DIR__ . '/endpoint.php'; ?>

<!-- controller -->

<?php include __DIR__ . '/includes/controllers/student_profile.php'; ?>

<!-- header -->
<?php include $_PATH['admin']['header']; ?>


<!-- wrapper -->
<div class="wrapper">

    <!-- nav -->
    <?php include $_PATH['admin']['nav']; ?>


    <!-- main -->
    <main class="app_main">

        <!-- content -->
        <section class="main-content container student-profile">
            <!-- info -->
            <div class="row align-items-center">

                <!-- avatar -->
                <div class="col-md-6">
                    <div class="profile">
                        <!-- title -->
                        <h1 class="main-title alert text-primary text-center">Hi <?php echo $first_name; ?>, Welcome!</h1>

                        <div class="avatar m-auto">
                            <img src="../photos/uploaded/<?php echo $photo; ?>" alt="Profile" class="img-fluid">
                        </div>
                    </div>
                </div>


                <!-- info -->
                <div class="col-md-6">
                    <div class="info py-3">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                #ID Number: <span class="fs-5 fw-bold text-secondary"><?php echo $id_number; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                First name: <span class="fs-5 fw-bold text-secondary"><?php echo $first_name; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Middle name: <span class="fs-5 fw-bold text-secondary"><?php echo $middle_name; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Last name: <span class="fs-5 fw-bold text-secondary"><?php echo $last_name; ?></span>
                            </div>


                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Age: <span class="fs-5 fw-bold text-secondary"><?php echo $age; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Date of birth: <span class="fs-5 fw-bold text-secondary"><?php echo $date_of_birth; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Gender: <span class="fs-5 fw-bold text-secondary"><?php echo $gender; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Address: <span class="fs-5 fw-bold text-secondary"><?php echo $address; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Contact Number: <span class="fs-5 fw-bold text-secondary"><?php echo $contact_number; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Email: <span class="fs-5 fw-bold text-secondary"><?php echo $email_address; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Religion: <span class="fs-5 fw-bold text-secondary"><?php echo $religion; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Nationality: <span class="fs-5 fw-bold text-secondary"><?php echo $nationality; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Course: <span class="fs-5 fw-bold text-secondary"><?php echo $course; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Year Level: <span class="fs-5 fw-bold text-secondary"><?php echo $year_level; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Section: <span class="fs-5 fw-bold text-secondary"><?php echo $section; ?></span>
                            </div>

                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                Passcode: <span class="fs-5 fw-bold text-secondary"><?php echo $pwd; ?></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main>
</div>


<?php include $_PATH['admin']['footer']; ?>