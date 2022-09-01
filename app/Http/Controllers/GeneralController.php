<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $menus = [];
        $menus[] = $this->createMenu('Nama Barang', Item::count(), 'Table Barang', '/items');
        $menus[] = $this->createMenu('Stok Barang', Item::sum('stock'), 'Table Barang', '/items');
        $menus[] = $this->createMenu('Telah Terjual', 0, 'Table Laporan', '/items');
        $menus[] = $this->createMenu('Kategori Barang', Category::count(), 'Table Kategori', '/categories');

        return view('index', [
            "menus" => $menus
        ]);
    }

    private function createMenu($title, $amount, $link_name, $link)
    {
        return [
            'title' => $title,
            'amount' => $amount,
            'link_name' => $link_name,
            'link' => $link
        ];
    }
}
