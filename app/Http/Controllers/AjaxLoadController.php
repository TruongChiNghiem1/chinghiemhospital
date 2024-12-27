<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class AjaxLoadController extends Controller
{
    public function loadProvince(Request $request) {
        $search = $request->search;
        $level = $request->level;
        $parent_id = $request->parent_id;

        $query = Province::query();
        $query->where('level',$level);
        if($parent_id) {
            $query->where('parent_code',$parent_id);
        }
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        $paginate = $query->paginate(20);
        $data['results'] = $query->select('code AS id', 'name AS text')->get();
        if($paginate->nextPageUrl()) {
            $data['pagination'] = ['more' => true];
        }

        $this->json_result($data);
    }
}
