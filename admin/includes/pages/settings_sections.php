<?php include __DIR__ . '/../controllers/sections.php'; ?>
<!-- title -->
<h4 class="main-title alert text-primary"><?php echo $source; ?> > Sections</h4>

<!-- section -->
<div class="sections mb-5">
    <!-- courses form -->
    <form action="<?php echo $url; ?>" method="post">
        <div class="field">
            <label for="section" class="form-label fs-4">Add new section</label>
            <div class="input-group">
                <input type="text" name="section" id="section" class="form-control" placeholder="Section name">
                <button class="btn btn-primary"><i class="fa-solid fa-circle-plus fa-lg"></i></button>
            </div>
        </div>
        <small class="text-danger"><?php echo $academic->get_error('section'); ?></small>
    </form>

    <?php if (!is_null($status)) : ?>
        <?php
        $status = ($status === 'deleted') ? 'deleted' : 'added';
        $color = ($status === 'deleted') ? 'danger' : 'primary';
        ?>
        <div class="alert alert-<?php echo $color; ?> alert-dismissible mt-2">Section <?php echo $status; ?> successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    <div class="table-response mt-3">
        <table class="table table-sm align-middle table-hover">
            <thead>
                <tr>
                    <th>Section name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($sections as $id => $sectioName) : ?>
                    <tr>
                        <td><?php echo $sectioName; ?></td>
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