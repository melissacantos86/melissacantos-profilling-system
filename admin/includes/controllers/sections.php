   <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $section = $academic->is_set('section');

        if (!is_null($section)) {
            $academic->check_input('section');
            if ($academic->add_record('section_name', [$academic->get_input('section')], 'sections')) {
                goLocation('./index.php?source=settings&page=' . $page . '&status=added');
            }
        } else {
            $academic->set_error('section', 'This field is required');
        }
    }
