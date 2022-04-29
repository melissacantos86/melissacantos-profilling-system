<!-- endpoints -->
<?php include __DIR__ . '/endpoint.php'; ?>

<?php

if ($user_type == 'Student') {
    goLocation('./student_profile.php');
}
?>

<!-- /controllers  -->
<?php include __DIR__ . '/includes/controllers/student_form.php'; ?>

<!-- header -->
<?php include $_PATH['admin']['header']; ?>

<div class="container pb-3">

    <!-- title -->
    <header class="alert">
        <h1 class="mb-0 text-primary text-center text-md-start">New Student Entry <i class="fa-solid fa-people-group text-secondary"></i></h1>
    </header>


    <!-- message indicator if record deleted -->
    <?php
    if ($status) :

        $color = ($status == 'added') ? 'primary' : 'success';

    ?>
        <div class="container">
            <div class="alert alert-<?php echo $color; ?> alert-dismissible fade show" role="alert">
                Successfully <?php echo $status; ?> the record.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <form action="<?php echo htmlentities($script); ?>" method="post" enctype="multipart/form-data">


        <!-- exist if edit mode -->
        <?php if (!is_null($steid)) : ?>
            <input type="hidden" name="id" value="<?php echo !is_null($steid) ? $steid : null; ?>">
        <?php endif; ?>
        <!-- hidden -->

        <!-- id -->
        <div class="field mb-3">
            <label for="id_number" class="form-label fw-bold">#ID Number</label>
            <input type="text" name="id_number" id="id_number" class="form-control" value="<?php echo $student->get_input('id_number'); ?>">
            <small class="text-danger"><?php echo $student->get_error('id_number'); ?></small>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <!-- first name -->
                <div class="field mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $student->get_input('first_name'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('first_name'); ?></small>
                </div>
            </div>
            <div class="col-md-4">
                <!-- middle name -->
                <div class="field mb-3">
                    <label for="middle_name" class="form-label">Middle name</label>
                    <input type="text" name="middle_name" id="middle_name" class="form-control" value="<?php echo $student->get_input('middle_name'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('middle_name'); ?></small>
                </div>
            </div>
            <div class="col-md-4">
                <!-- last name -->
                <div class="field mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $student->get_input('last_name'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('last_name'); ?></small>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <!-- course -->
            <div class="col-md-4">
                <div class="field">
                    <label for="course" class="form-label">Course</label>
                    <select name="course" id="course" class="form-select">
                        <?php foreach ($courses as $id => $courseName) : ?>

                            <?php if (isset($course) && $course == $id) : ?>
                                <option value="<?php echo $id; ?>" selected><?php echo $courseName; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $id; ?>"><?php echo $courseName; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- section -->
            <div class="col-md-4">
                <div class="field">
                    <label for="section" class="form-label">Section</label>
                    <select name="section" id="section" class="form-select">
                        <?php foreach ($sections as $id => $sectionName) : ?>

                            <?php if (isset($section) && $id == $section) : ?>
                                <option value="<?php echo $id; ?>" selected><?php echo $sectionName; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $id; ?>"><?php echo $sectionName; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- level -->
            <div class="col-md-4">
                <div class="field">
                    <label for="year_level" class="form-label">Year Level</label>
                    <select name="year_level" id="year_level" class="form-select">
                        <?php foreach ($levels as $id => $level) : ?>
                            <?php if (isset($year_level) && !empty($year_level == $id)) : ?>
                                <option value="<?php echo $id; ?>" selected><?php echo $level; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $id; ?>"><?php echo $level; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <!-- age -->
            <div class="col-md-2 col-sm">
                <div class="field">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" name="age" id="age" class="form-control" value="<?php echo $student->get_input('age'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('age'); ?></small>
                </div>
            </div>
            <!-- birth -->
            <div class="col-md-4 col-sm">
                <div class="field">
                    <label for="date_of_birth" class="form-label">Date of birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?php echo $student->get_input('date_of_birth'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('date_of_birth'); ?></small>
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-center justify-content-between">
                <h6 class="mb-0">Gender</h6>
                <?php $gender = $student->get_input('gender');
                ?>
                <div class="field">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>
                        <label class="form-check-label" for="Male">
                            Male
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>
                        <label class="form-check-label" for="Female">
                            Female
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="Other" value="Other" <?php if ($gender == "Other") echo "checked"; ?>>
                        <label class="form-check-label" for="Other">
                            Other
                        </label>
                    </div>
                </div>
                <!-- no error message -->
            </div>
        </div>

        <!-- address -->
        <div class="field mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo $student->get_input('address'); ?>">
            <small class="text-danger"><?php echo $student->get_error('address'); ?></small>
        </div>

        <div class="row mb-3">
            <!-- contact -->
            <div class="col-md-6">
                <div class="field">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo $student->get_input('contact_number'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('contact_number'); ?></small>
                </div>
            </div>
            <!-- birth -->
            <div class="col-md-6">
                <div class="field">
                    <label for="email_address" class="form-label">Email</label>
                    <input type="text" name="email_address" id="email_address" class="form-control" value="<?php echo $student->get_input('email_address'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('email_address'); ?></small>
                </div>
            </div>
        </div>


        <div class="row mb-3 d-flex justify-content-center align-items-center">
            <div class="col-md-3">
                <!-- religion -->
                <div class="field mb-3">
                    <label for="religion" class="form-label">Religion</label>
                    <input type="text" name="religion" id="religion" class="form-control" value="<?php echo $student->get_input('religion'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('religion'); ?></small>
                </div>
            </div>
            <div class="col-md-3">
                <!-- nationality -->
                <div class="field mb-3">
                    <label for="nationality" class="form-label">Nationality</label>
                    <input type="text" name="nationality" id="nationality" class="form-control" value="<?php echo $student->get_input('nationality'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('nationality'); ?></small>
                </div>
            </div>

            <div class="col-md-6">
                <!-- photo -->
                <div class="field mb-3">
                    <label for="pwd" class="form-label text-primary">Passcode</label>
                    <input type="text" name="pwd" id="pwd" class="form-control" value="<?php echo $student->get_input('pwd'); ?>">
                    <small class="text-danger"><?php echo $student->get_error('pwd'); ?></small>
                </div>
            </div>
        </div>

        <!-- exist if edit mode -->
        <?php if (!is_null($steid)) : ?>
            <div class="photo_preview">
                <div class="avatar shadow-lg">
                    <img src="../photos/uploaded/<?php echo $photo; ?>" alt="image" class="img-fluid">
                </div>
            </div>
        <?php endif; ?>
        <!-- photo -->
        <div class="field mb-3">
            <label for="photo" class="form-label fw-bold"><?php echo isset($steid) ? 'Change photo' : 'Upload photo'; ?></label>
            <input type="file" name="photo" id="photo" class="form-control">
            <small class="text-danger"><?php echo $student->get_error('photo'); ?></small>
        </div>

</div>

<div class="field text-end border-0 alert d-flex justify-content-between align-items-center">
    <a href="./index.php?source=students" class="btn btn-lg btn-dark">Back</a>
    <button type="submit" class="btn btn-primary btn-lg">Submit <i class="fa-solid fa-circle-check ms-1"></i></button>
</div>

</form>
</div>



<?php include $_PATH['admin']['footer']; ?>