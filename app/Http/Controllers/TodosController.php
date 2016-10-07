<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Todo;

class TodosController extends Controller
{
    public function index(){
    	$todos = Todo::all();
    	return $todos;
    }

    public function store(Request $request) {
		//$todo = Todo::create(Request::all());
		//return $todo;

		$tudo = new Todo;
        $tudo->title = $request->get('title');
        //$tudo->done = $request->get('done');

        $tudo->save();
	}

    public function update(Request $request, $id){
    	$todo = Todo::find($id);
    	$todo->done = $request->get('done');
    	$todo->save();

    	return $todo;
    }

    public function destroy($id) {
		Todo::destroy($id);
	}
}
