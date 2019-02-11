<?php
class Controller_Portfolio extends Controller{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Portfolio();

    }
    public function action_index()
    {
        $data = $this->model->getData();
        $this->view->ViewWTemplate('portfolio_view.php','template_view.php',$data);
    }
}