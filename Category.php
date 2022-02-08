<?php
include('./Model.php');

class Category extends Model
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

$category = new Category();
$category->create();
$category->delete();
$category->read();
$category->update();