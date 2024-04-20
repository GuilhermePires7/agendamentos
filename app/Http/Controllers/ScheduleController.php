<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use PhpParser\Node\Expr\New_;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('welcome', ['schedules' => $schedules]);
    }
    public function create()
    {
        return view('schedules.create');
    }
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->name = $request->name;
        $schedule->week = $request->week;
        $schedule->phone = $request->phone;
        $schedule->time = $request->time;

        $schedule->save();
        return redirect('/')->with('msg', 'O agendamento foi realizado com sucesso');
    }
}
