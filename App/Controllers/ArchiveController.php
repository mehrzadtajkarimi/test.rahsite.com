<?php
namespace App\Controllers;

use App\Controllers\Contracts\Controller;
use App\Models\Archive;

class ArchiveController extends Controller {
    private $articles;

    public function __construct() {
        $this->articles = new Archive();
    }


    function index() {

        $data = [
            'articles' => $this->articles->all(),

        ];
        view('archive.index');
    }

    function tab() {
        $number = $_POST['number'];
        if ($number == 0) {
            $articles = $this->model->articles();
            $time_logs = $this->model->timeLogs();
            $data = [
                'articles' => $articles,
                'timeLogs' => $time_logs
            ];
            $this->view('articlesCategorize/site_design', $data, 1, 1);
        }
        if ($number == 1) {
            $articles = $this->model->articles();
            $this->view('articlesCategorize/optimizing_site', $articles, 1, 1);
        }
    }

}
