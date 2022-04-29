   <?php



    $level = $academic->is_set('level');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (!is_null($level)) {
            $academic->check_input('level');
            if ($academic->add_record('level', [$academic->get_input('level')], 'levels')) {
                goLocation('./index.php?source=settings&page=' . $page . '&status=added');
            };
        } else {
            $academic->set_error('level', 'This field is required');
        }
    }
