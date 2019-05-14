<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Contribution;
use App\Models\Expense;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resolved = Complaint::where('status', 'resolved')->count();
        $pending = Complaint::where('status', 'pending')->count();
        $contributions = Contribution::sum('amount') / 100;
        $expenses = Expense::sum('amount') / 100;
        return response()->json(compact('resolved', 'pending', 'contributions',
            'expenses'));
    }

}
