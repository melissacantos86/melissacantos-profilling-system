<?php

class Academic extends DBConnect
{
    // user helper functions
    use Input_handlers;

    public $inputs = [];
    public $errors = [];

    public  function add_record($column, $param,  $table)
    {
        if ($this->no_errors()) {
            $sql = "INSERT INTO $table ($column) VALUES (?)";
            return $this->prepare($sql, $param);
        }
    }

    public function get_academics($column1, $column2, $table)
    {
        return $this->get_pairs($column1, $column2, $table);
    }

    public function remove_academic($id, $table)
    {
        return $this->delete($id, $table);
    }
}
