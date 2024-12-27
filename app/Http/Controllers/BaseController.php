<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $website = 'modules';
    protected $view = null;
    protected $folder = null;
    public $db;
    public function __construct($folder, $table = null)
    {
        if(is_null($table)) {
            $table = $folder;
        }
        $this->view = $this->website . '.' . $folder;
        $modelClass = "App\Models\\" . ucfirst($table);
        $this->db = new $modelClass();
        $this->db = $this->db::query();
    }

    public function view(string $page, array $data = []) {
        return view($this->view . '.' . $page, $data);
    }

    public function routeRedirect(string $page, array $flash = [])
    {
        if(empty($flash)) {
            return redirect()->route($this->view . '.' . $page);
        } else {
            return redirect()->route($this->view . '.' . $page)->with($flash);
        }
    }
}
