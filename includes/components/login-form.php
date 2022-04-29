<!-- logic -->
<?php include __DIR__ . '/../controllers/login-form.php'; ?>

<form action="<?php echo htmlspecialchars($script); ?>" method="post">
    <?php
    $errors = $signin->get_error('errors');
    if (!empty($errors)) : ?>
        <div class="alert alert-warning alert-dismissible"><?php echo $errors; ?> <span class="btn-close" data-bs-dismiss="alert"></span></div>
    <?php endif; ?>



    <!-- user type-->
    <div class="field mb-3">
        <label for="user_type" class="form-label fw-bold fs-5 text-primary">Login as</label>
        <select name="user_type" id="user_type" class="form-select">
            <?php if ($signin->get_input('user_type') == 'Administrator') :  ?>
                <option value=""></option>
                <option value="Administrator" selected>Administrator</option>
                <option value="Student">Student</option>

            <?php elseif ($signin->get_input('user_type') == 'Student') :  ?>
                <option value=""></option>
                <option value="Student" selected>Student</option>
                <option value="Administrator">Administrator</option>
            <?php else : ?>

                <option value=""></option>
                <option value="Student">Student</option>
                <option value="Administrator">Administrator</option>
            <?php endif;  ?>
        </select>
    </div>

    <!-- input ID -->
    <div class="field mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="<?php echo $signin->get_input('username'); ?>">
    </div>
    <!-- input password -->
    <div class="field mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" name="password" id="password" class="form-control" value="<?php echo $signin->get_input('password'); ?>">

    </div>

    <div class="field text-end">
        <button type="submit" class="btn btn-primary">Login Now</button>
    </div>
</form>