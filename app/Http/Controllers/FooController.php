<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foo;

class FooController extends Controller
{
    public function create(Request $request)
    {
        // $user = auth()->user();
        // dd($user);
        $foo = new Foo();
        $foo->name = $request->name;
        $foo->save();
    }
}
