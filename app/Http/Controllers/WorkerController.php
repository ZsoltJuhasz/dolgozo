<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function getAllWorker(){

        $getEveryWorkers = Worker::all();
        return view("workers", ["workers" => $getEveryWorkers]);
    }

    public function showCertainWorker(Request $request){

        $showCertainWorkerById = Worker::find($request->input('id'));
        return view("worker", ["worker" => $showCertainWorkerById]);
    }

    public function deleteCertainWorker(Worker $worker){

        $worker->delete();
        return back();
    }

    public function openModifiedMenu(Worker $worker){
        return view("modify", ["worker" => $worker]);
    }

    public function editCertainWorker(Request $request, Worker $worker){

        $worker->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'birthdate'=>$request->birthdate,
            'salary'=>$request->salary
        ]);
        return back();
    }
}
