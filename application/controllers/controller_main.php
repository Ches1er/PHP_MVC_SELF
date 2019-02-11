<?php
class Controller_Main extends Controller{
    public function action_index()
    {
        $data = ["title"=>"Main"];
        $this->view->ViewWTemplate('main_view.php', 'template_view.php',$data);
    }
}