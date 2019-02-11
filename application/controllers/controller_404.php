<?php
class Controller_404 extends Controller{
    public function action_index()
    {
        $data = ["title"=>"Error404"];
        $this->view->ViewWTemplate('404_view.php', 'template_view.php',$data);
    }
}