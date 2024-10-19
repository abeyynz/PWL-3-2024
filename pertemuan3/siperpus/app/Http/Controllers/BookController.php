<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data ['books'] = [
            [
                'judul' => 'Pengembangan mental dengan JSHT',
                'halaman' => '500',
                'penulis' => 'Siapa saja'
            ],
            [
                'judul' => 'Balon',
                'halaman' => '150',
                'penulis' => 'Helo'
            ],
        ];
        return view("books.index", $data);
    }
    public function search(string $id){
        $data['id'] = $id;
        return view("books.index", $data);
    }
}
