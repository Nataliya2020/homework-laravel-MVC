<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $todos = Todo::all();
        if (count($todos) === 0) {
            dump("Задач нет");
        } else {
            foreach ($todos as $todo) {
                dump($todo->title);
                dump($todo->description);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
    // * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $todosItem = Todo::find($id);

        if (!$todosItem) {
            dump("Задачи с номером $id нет");
        } else {
            dump($todosItem->title);
            dump($todosItem->description);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
    // * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todo = new Todo;
        $todo->title = 'Новая задача';
        $todo->description = 'Описание задачи…';
        $todo->save();
        return redirect('/todo');
    }
}
