<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        //TOTAL POST
        $total_post = Post::count();

        //TOTAL PROJECT
        $total_project = Project::count();

        //CHARTS POST
        $posts = Post::selectRaw("COUNT(*) as count, DATE_FORMAT(created_at, '%M') as month_name, MONTH(created_at) as month_number")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_number', 'month_name')
            ->orderBy('month_number')
            ->pluck('count', 'month_name');

        $labels1 = $posts->keys();
        $data1 = $posts->values();

        //CHARTS PROJECT
        $projects = Project::selectRaw("COUNT(*) as count, DATE_FORMAT(created_at, '%M') as month_name, MONTH(created_at) as month_number")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_number', 'month_name')
            ->orderBy('month_number')
            ->pluck('count', 'month_name');

        $labels2 = $projects->keys();
        $data2 = $projects->values();


        return view('dashboard', [
            'total_post' => $total_post,
            'total_project' => $total_project,
            'labels1' => $labels1,
            'data1' => $data1,
            'labels2' => $labels2,
            'data2' => $data2,
        ]);
    }
    public function content()
    {

        return view('content');
    }
    public function works()
    {

        return view('works');
    }
    public function setting()
    {

        return view('setting');
    }
    public function profil()
    {

        return view('profil');
    }
    public function search(Request $request)
    {

        $query = $request->input('search');

        //POST SEARCH
        $postResults = Post::where('judul', 'LIKE', '%' . $query . '%')
            ->orWhere('content', 'LIKE', '%' . $query . '%')
            ->get();

        //PROJECT SEARCH
        $projectResults = Project::where('project', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

        //USER SEARCH
        $userResults = User::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('email', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search', compact('postResults', 'projectResults', 'userResults'));
    }
}
