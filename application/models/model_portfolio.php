<?php
class Model_Portfolio extends Model{
    public function getData()
    {
        $data = [
            array("year"=>"1994","content"=>"something"),
            array("year"=>"1995","content"=>"something else")
        ];
        return $data;
    }
}