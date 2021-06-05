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



}
