<?php

class homeController
{
    public $model = null;
    public function __construct()
    {
        include('model/home.php');
        $this->model = new homeModel();
    }

    public function home()
    {
        $arr = $this->model->home();
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }

    public function about()
    {
        $arr = $this->model->about();
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }

    public function contact()
    {
        $arr = $this->model->contact();
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }

    // public function home()
    // {
    //     $arr = $this->model->home();
    //     echo json_encode($arr);
    // }

    // public function about()
    // {
    //     $arr = $this->model->about();
    //     echo json_encode($arr);

    // }

    // public function contact()
    // {
    //     $arr = $this->model->contact();
    //     echo json_encode($arr);

    // }
}

?>