<?php
include('./Model.php');

class Product extends Model
{

    public function create()
    {
        echo "create";
    }

    public function delete()
    {
        echo "delete";
    }
    public function update()
    {
        echo "update";
    }
    public function read()
    {
        echo "read";
    }
}