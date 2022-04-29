<!-- header -->
<header class="app_header d-flex justify-content-between align-items-center px-4 px-sm-5 border-bottom">

    <!-- logo -->
    <div class="d-flex align-items-center">
        <div class="logo me-2">
            <img src="../photos/logo.png" alt="" class="img-fluid">
        </div>
        <div class="fw-bolder">Profiling</div>
    </div>

    <!-- nav -->
    <div class="dropdown d-flex flex-column">
        <div class="avatar mx-auto" data-bs-toggle="dropdown" data-bs-auto-close="outside">
            <img src="../photos<?php echo $user_type == 'Student' ? "/uploaded/$photo" : '/avatar.png'; ?>" alt="Avatar" class="img-fluid">
        </div>

        <small><?php echo $user_type; ?></small>

        <ul class="dropdown-menu shadow border-0">
            <!-- display this list if the user is not student -->
            <?php if ($user_type === 'Administrator') :
            ?>
                <li>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="?source=dashboard">Dashboard <i class="fa-solid fa-house"></i></a>
                </li>
                <li>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="?source=students">Students <i class="fa-solid fa-people-group"></i></a>
                </li>
                <!-- college settings -->
                <li>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center accordion-button" href="#settings" data-bs-toggle="collapse">Settings</a>
                    <!-- collapsible items -->
                    <div class="collapse" id="settings">
                        <a class="dropdown-item py-2 d-flex justify-content-end align-items-center" href="?source=settings&page=settings_courses">Courses</a>
                        <a class="dropdown-item py-2 d-flex justify-content-end align-items-center" href="?source=settings&page=settings_levels">Year Levels</a>
                        <a class="dropdown-item py-2 d-flex justify-content-end align-items-center" href="?source=settings&page=settings_sections">Sections</a>
                    </div>
                </li>
            <?php endif;
            ?>
            <li>
                <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="./signout.php?signout">Sign out <i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
        </ul>
    </div>
</header>