<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 14/01/2019
 * Time: 12:33 PM
 */

namespace App\Http\Controllers;


class sampleController extends controller
{
    public function showSamplePage() {
        $name = 'Oluyemi';
        $products = [
            [
                'name' => 'books',
                'test' => 'page'
            ],
            [
                'name' => 'books',
                'test' => 'page'
            ],
            [
                'name' => 'books',
                'test' => 'page'
            ],
            [
                'name' => 'books',
                'test' => 'page'
            ],
            [
                'name' => 'books',
                'test' => 'page'
            ]
        ];
        return view('sample', compact('products'));
    }

    public function testPage() {
        return view('welcome');
    }

}