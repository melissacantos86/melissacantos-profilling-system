<?php
$signin = new Sign_in();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // validate inputs
    $signin->check_inputs($_POST);

    // check if inputs is valis and not empty
    if ($signin->is_validated_inputs()) {
        // process inputs
        $signin->process_input($signin->get_input('user_type'));
    } else {
        $signin->set_error('errors', 'All field is required');
    }
}
