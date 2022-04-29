<?php

class Sign_in extends DBConnect
{

    // .. user helper functions 
    use Input_handlers;

    public $inputs = [];
    public $errors = [];


    public function validateUser()
    {

        if ($this->get_input('username') === CREDENTIAL['username'] && $this->get_input('password') === CREDENTIAL['password']) {
            $this->signinUser();
        } else {

            $this->set_error('errors', 'Please enter your valid credential');
        }
    }


    public function validateStudent($params)
    {
        $statement =  $this->pdo->prepare("SELECT * FROM student WHERE id_number = :id_number AND pwd = :pwd");
        $statement->execute($params);

        if ($statement->rowCount() > 0) {
            $this->signinUser();
        } else {
            $this->set_error('errors', 'Please enter your valid credential');
        }
    }


    public function process_input($user_type)
    {
        switch ($user_type) {
            case 'Administrator':
                $this->validateUser();
                break;

            case 'Student':
                $this->validateStudent([
                    ':id_number' => $this->get_input('username'),
                    ':pwd' => $this->get_input('password')
                ]);
                break;
        }
    }

    public function is_validated_inputs()
    {
        return $this->no_errors();
    }


    public function signinUser()
    {

        $_SESSION['signin'] = [
            'is_signin' => true,
            'username' => $this->get_input('username'),
            'user_type' => $this->get_input('user_type')
        ];


        // redirect to admin
        goLocation('./admin/index.php');
    }
}
