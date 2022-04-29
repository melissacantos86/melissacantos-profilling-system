<?php

class Student extends DBConnect
{

    public $table = 'student';


    use Input_handlers;

    public $inputs = [];
    public $errors = [];

    // public function 



    public function add_student_record(array $post, $photo)
    {
        $sql = "INSERT INTO {$this->table} (id_number,
                                    first_name,
                                    middle_name,
                                    last_name,
                                        age,
                                        date_of_birth,
                                        gender,
                                        address,
                                        contact_number,
                                        email_address,
                                        religion,
                                        nationality,
                                        course,
                                        year_level,
                                        section,
                                        pwd,
                                        photo) VALUES (:id_number, 
                                        :first_name,
                                         :middle_name,
                                    :last_name,
                                          :age,
                                          :date_of_birth,
                                          :gender,
                                          :address,
                                          :contact_number,
                                          :email_address,
                                          :religion,
                                          :nationality,
                                          :course,
                                          :year_level,
                                          :section,
                                          :pwd,
                                          :photo)";



        return  $this->prepare($sql, [
            'id_number' => $post['id_number'],
            'first_name'  => $post['first_name'],
            'middle_name'  => $post['middle_name'],
            'last_name'  => $post['last_name'],
            'age'  => $post['age'],
            'date_of_birth'  => $post['date_of_birth'],
            'gender'  => $post['gender'],
            'address'  => $post['address'],
            'contact_number'  => $post['contact_number'],
            'email_address'  => $post['email_address'],
            'religion'  => $post['religion'],
            'nationality'  => $post['nationality'],
            'course'  => intval($post['course']),
            'year_level'  => intval($post['year_level']),
            'section'  => intval($post['section']),
            'pwd'  => $post['pwd'],
            'photo'  => $photo
        ]);
    }

    public function update_record($id,  array $post, $photo)
    {

        $statement =  $this->pdo->prepare("UPDATE student SET id_number = :id_number,
                                    first_name = :first_name,
                                    middle_name = :middle_name,
                                    last_name = :last_name,
                                        age = :age,
                                        date_of_birth = :date_of_birth,
                                        gender = :gender,
                                        address = :address,
                                        contact_number = :contact_number,
                                        email_address = :email_address,
                                        religion = :religion,
                                        nationality = :nationality,
                                        course = :course,
                                        year_level = :year_level,
                                        section = :section,
                                        pwd = :pwd,
                                        photo = :photo WHERE id = :id");


        $statement->bindParam(':id_number', $post['id_number']);
        $statement->bindParam(':first_name', $post['first_name']);
        $statement->bindParam(':middle_name', $post['middle_name']);
        $statement->bindParam(':last_name', $post['last_name']);
        $statement->bindParam(':age', $post['age']);
        $statement->bindParam(':date_of_birth', $post['date_of_birth']);
        $statement->bindParam(':gender', $post['gender']);
        $statement->bindParam(':address', $post['address']);
        $statement->bindParam(':contact_number', $post['contact_number']);
        $statement->bindParam(':email_address', $post['email_address']);
        $statement->bindParam(':religion', $post['religion']);
        $statement->bindParam(':nationality', $post['nationality']);
        $statement->bindParam(':course', $post['course'], PDO::PARAM_INT);
        $statement->bindParam(':year_level', $post['year_level'], PDO::PARAM_INT);
        $statement->bindParam(':section', $post['section'], PDO::PARAM_INT);
        $statement->bindParam(':pwd', $post['pwd']);
        $statement->bindParam(':photo', $photo);
        // where id
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }

    public function run($post, $file, $is_update = null)
    {


        // check all inputs
        $this->check_inputs($post);

        // check all uploaded files
        $this->check_input_file($file, $_FILES[$file]);

        if (count($this->errors) === 0) {
            // check if file is upload

            $photo = $this->upload_file($_FILES[$file]);

            if ($photo) {

                $values = array_values($_POST);
                $names = array_keys($_POST);

                $bindvalues = $this->map_columnvalues($names, $values);

                // add data to database
                global $script;

                if (!is_null($is_update)) {
                    $this->update_record($is_update, $bindvalues, $photo);
                    goLocation("$script?steid=$is_update&status=updated");
                }

                $this->add_student_record($bindvalues, $photo);


                goLocation("$script?status=added");
            }
        }
    }

    public function academicName($id, $column, $table)
    {
        return $this->getAcademic($id, $column, $table);
    }

    public function removeStudent($id)
    {
        return $this->delete($id, $this->table);
    }
}
