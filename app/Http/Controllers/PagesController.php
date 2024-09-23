<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Price;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        //TOTAL PROJECT
        $total_project = Project::count();

        //TOTAL TASK
        $total_task = Task::count();

        //TOTAL PRICE
        $total_price = Price::sum('price');

        //TOTAL PAYMENT
        $total_payment = Payment::sum('price');

        //CHARTS PROJECT
        $projects = Project::selectRaw("COUNT(*) as count, DATE_FORMAT(created_at, '%M') as month_name, MONTH(created_at) as month_number")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_number', 'month_name')
            ->orderBy('month_number')
            ->pluck('count', 'month_name');

        $labels1 = $projects->keys();
        $data1 = $projects->values();

        // PENDAPATAN CHART
        $pendapatan = Payment::selectRaw("SUM(price) as total_nominal, DATE_FORMAT(created_at, '%M') as month_name, MONTH(created_at) as month_number")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_number', 'month_name')
            ->orderBy('month_number')
            ->pluck('total_nominal', 'month_name');

        $labels2 = $pendapatan->keys();
        $data2 = $pendapatan->values();



        return view(
            'dashboard',
            [
                'total_project' => $total_project,
                'total_task' => $total_task,
                'total_price' => $total_price,
                'total_payment' => $total_payment,
                'labels1' => $labels1,
                'data1' => $data1,
                'labels2' => $labels2,
                'data2' => $data2,

            ]
        );
    }

    public function search(Request $request)
    {

        $query = $request->input('search');

        //PROJECT SEARCH
        $projectResults = Project::where('project', 'LIKE', '%' . $query . '%')
            ->orWhere('name', 'LIKE', '%' . $query . '%')
            ->get();

        //PRICE SEARCH
        $priceResults = Price::where('service', 'LIKE', '%' . $query . '%')
            ->orWhere('user_id', 'LIKE', '%' . $query . '%')
            ->get();

        //TASK SEARCH
        $taskResults = Task::where('task', 'LIKE', '%' . $query . '%')
            ->orWhere('status', 'LIKE', '%' . $query . '%')
            ->get();

        //PAYMENT SEARCH
        $paymentResults = Payment::where('payment', 'LIKE', '%' . $query . '%')
            ->orWhere('project_id', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search', compact('priceResults', 'projectResults', 'taskResults', 'paymentResults'));
    }
}
