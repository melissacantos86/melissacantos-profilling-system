<!-- endpoints -->
<?php include __DIR__ . '/endpoint.php'; ?>


<?php

if ($user_type == 'Student') {
    goLocation('./student_profile.php');
}
?>

<?php include __DIR__ . '/includes/controllers/students_search.php' ?>


<!-- header -->
<?php include $_PATH['admin']['header']; ?>


<!-- wrapper -->
<div class="wrapper">

    <!-- nav -->
    <?php include $_PATH['admin']['nav']; ?>


    <!-- main -->
    <main class="app_main">
        <?php include __DIR__ . '/includes/controllers/students_search.php'; ?>

        <!-- content -->
        <section class="main-content">
            <!-- title -->
            <div class="alert text-primary d-flex justify-content-between align-items-center container">
                <h4 class="main-title">Students</h4>
                <a href="./student_form.php"><i class="fa-solid fa-person-circle-plus fa-2x icon"></i></a>
            </div>

            <!-- searching -->
            <div class="search-bar mb-3 container">
                <div class="field">
                    <label for="term" class="form-label">Search student</label>
                    <form action="./students_search.php" method="get">
                        <div class="input-group">
                            <a href="./index.php?source=students" class="btn btn-danger"><i class="fa-regular fa-rectangle-xmark"></i></a>
                            <input type="text" name="term" id="term" class="form-control form-control-sm" value="<?php echo !is_null($term) ? $term : null; ?>">
                            <button class="btn btn-secondary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- check if reacord found -->
            <?php if (!empty($term) && $records->rowCount() > 0) :

                $rows = $records->fetchAll(PDO::FETCH_ASSOC);

            ?>

                <div class="alert alert-primary container d-flex align-items-center fs-4 alert-dismissible fade show">
                    <?php echo count($rows); ?>
                    <?php echo (count($rows) > 1) ? 'record(s)' : 'record'; ?>
                    </h4> found for <h4 class="mb-0 ms-2 fw-bold"><?php echo $term; ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <!-- table records -->
                <div class="table-responsive container-fluid">
                    <table class="table align-middle table-sm table-hover">
                        <thead>
                            <tr>
                                <th>#ID Number</th>
                                <th>Image</th>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Age</th>
                                <th>Date of birth</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email Address</th>
                                <th>Religion</th>
                                <th>Nationality</th>
                                <th>Course</th>
                                <th>Year</th>
                                <th>Section</th>
                                <th>Passcode</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($rows as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id_number']; ?></td>
                                    <td>
                                        <div class="avatar">
                                            <img src="<?php echo "../photos/uploaded/{$row['photo']}"; ?>" alt="" class="img-fluid">
                                        </div>
                                    </td>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['middle_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['date_of_birth']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['contact_number']; ?></td>
                                    <td><?php echo $row['email_address']; ?></td>
                                    <td><?php echo $row['religion']; ?></td>
                                    <td><?php echo $row['nationality']; ?></td>
                                    <td><?php echo $student->academicName($row['course'], 'course_name', 'courses'); ?></td>
                                    <td><?php echo $student->academicName($row['year_level'], 'level', 'levels'); ?></td>
                                    <td><?php echo $student->academicName($row['section'], 'section_name', 'sections'); ?></td>
                                    <td><?php echo $row['pwd']; ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center table-icons">
                                            <a href="./student_form.php?steid=<?php echo $row['id']; ?>" class="d-flex justify-content-center align-items-center text-decoration-none me-1"><i class="fa-solid fa-pencil text-secondary"></i></a>
                                            <a href="./index.php?source=students&stdid=<?php echo $row['id']; ?>" class="d-flex justify-content-center align-items-center text-decoration-none ms-1"><i class="fa-solid fa-trash-can text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>


            <?php elseif (empty($term)) : ?>

                <!-- else display an indicator message for no record found -->
                <div class="alert alert-danger container d-flex align-items-center fs-4 show">
                    Please type the information that you want to find
                </div>
            <?php else : ?>


                <!-- else display an indicator message for no record found -->
                <div class="alert alert-warning container d-flex align-items-center fs-4 show">No record found for <h4 class="mb-0 ms-2 fw-bold"><?php echo !is_null($term) ? $term : null; ?></h4>
                </div>
            <?php endif; ?>


        </section>

    </main>
</div>


<?php include $_PATH['admin']['footer']; ?>