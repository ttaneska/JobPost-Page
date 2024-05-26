<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $jobs=Job::query()->with(['employer', 'tags'])->where('title', 'LIKE', '%'.request('q').'%')->get();
        return view('auth.results',['jobs'=>$jobs]);
    }
}
