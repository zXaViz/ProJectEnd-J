<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function create()
    {
        return view('admin.menu.add', [
            'title' => 'Thêm Danh Mục Mới'
//            'menus' => $this->menuService->getParent()
        ]);
    }

}
