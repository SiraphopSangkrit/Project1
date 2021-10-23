<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;
use LMS\Modules\Courses\Repositories\Contracts\CourseRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param CourseRepositoryInterface $courseRepository
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard(CourseRepositoryInterface $courseRepository)
    {
        $course = $courseRepository->allAvailable();

        return view('dashboard', compact('course'));
    }
}
