<?php include __DIR__ . '/../controllers/levels.php'; ?>

<!-- title -->
<h4 class="main-title alert text-primary"><?php echo $source; ?> > Levels</h4>
<!-- level -->
<div class="levels mb-5">
    <!-- level form -->
    <form action="<?php echo $url;  ?>" method="post">
        <div class="field">
            <label for="level" class="form-label fs-4">Add new level</label>
            <div class="input-group">
                <input type="text" name="level" id="level" class="form-control" placeholder="Year level">
                <button class="btn btn-primary"><i class="fa-solid fa-circle-plus fa-lg"></i></button>
            </div>
        </div>
        <small class="text-danger"><?php echo $academic->get_error('level'); ?></small>
    </form>


    <?php if (!is_null($status)) : ?>
        <?php
        $status = ($status === 'deleted') ? 'deleted' : 'added';
        $color = ($status === 'deleted') ? 'danger' : 'primary';
        ?>
        <div class="alert alert-<?php echo $color; ?> alert-dismissible mt-2">Year level <?php echo $status; ?> successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="table-response mt-3">
        <table class="table table-sm align-middle table-hover">
            <thead>
                <tr>
                    <th>Year level</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($year_levels as $id => $level) : ?>
                    <tr>
                        <td><?php echo $level; ?></td>
                        <td>
                            <div class="table-icons d-flex justify-content-center align-content-center">
                                <a href="<?php echo $url; ?>&id=<?php echo $id; ?>" class="text-decoration-none d-flex justify-content-center align-items-center ms-1"><i class="fa-solid fa-trash-can text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>