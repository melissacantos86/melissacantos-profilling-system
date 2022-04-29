<?php

// ... database connection 
class DBConnect
{

    public PDO $pdo;

    public function __construct()
    {

        try {


            $host = DATABASE['host'];
            $user = DATABASE['user'];
            $password = DATABASE['password'];
            $dbname = DATABASE['dbname'];

            $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $this->pdo = new PDO($dsn, $user, $password, $options);
            // return pdo object
            return $this->pdo;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function query($query)
    {
        return $this->pdo->query($query);
    }


    public function delete($id, $table)
    {
        $statement =  $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
        return $statement->execute([':id' => $id]);
    }

    public function getRowByColumn($value, $column, $table = 'students')
    {
        return  is_integer($value) ? $this->query("SELECT * FROM $table WHERE $column = $value") : $this->query("SELECT * FROM $table WHERE $column = '{$value}'");
    }

    public function get_row_byColumn($param, $column, $table = 'student')
    {
        $statement =  $this->query("SELECT * FROM $table WHERE $column = ?");
        $statement->execute([$param]);
        return $statement;
    }

    public function getAcademic($id, $column, $table)
    {
        $statement =  $this->pdo->prepare("SELECT $column FROM $table WHERE id = :id");
        $statement->execute([
            ':id' => $id
        ]);

        if ($statement->rowCount() > 0) {
            return $statement->fetch(PDO::FETCH_ASSOC)[$column];
        } else {
            return '';
        }
    }

    public function get_pairs($column1, $column2, $table)
    {
        return $this->query("SELECT $column1, $column2 FROM $table")->fetchAll(PDO::FETCH_KEY_PAIR);
    }


    public function get_rows($table = 'student')
    {
        return $this->query("SELECT * FROM $table");
    }

    public function get_row_byId($id, $table = 'student')
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $statement->execute([':id' => $id]);
        return  $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCounts($table = 'student')
    {
        return  $this->query("SELECT COUNT(*) as counts FROM $table")->fetch(PDO::FETCH_ASSOC)['counts'];
    }

    public function prepare($query, array $array)
    {
        $statement = $this->pdo->prepare($query);
        return $statement->execute($array);
    }

    public function search($term, $table = 'student')
    {
        $statement =  $this->pdo->prepare("SELECT * FROM {$table} WHERE id_number LIKE :term OR first_name LIKE :term OR middle_name LIKE :term OR last_name LIKE :term OR age LIKE :term OR gender LIKE :term OR address LIKE :term OR email_address LIKE :term OR religion LIKE :term OR nationality LIKE :term");
        $statement->bindParam(":term", $term);
        $statement->execute();
        return $statement;
    }
}
