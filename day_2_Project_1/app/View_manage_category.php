<?php


namespace app;
use app\Database_Canect;

class View_manage_category
{
    public function view_category()
    {
        $link = \app\Database_Canect::database_canect();
        $sql = "select * from add_category";
        if (mysqli_query($link,$sql)) {
            $message = mysqli_query($link, $sql);
            return $message;
        } else {
            die('Query function is error' . mysqli_error($link));

        }
    }
}