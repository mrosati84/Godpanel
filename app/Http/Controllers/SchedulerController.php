<?php namespace App\Http\Controllers;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\ActivityRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\User;
use DB;
use Illuminate\Http\Request;

class SchedulerController extends Controller
{
    public function users(UserRepository $repository)
    {
        return $repository->findAll();
    }

    public function projects(ProjectRepository $repository)
    {
        return $repository->findAll();
    }

    public function activities(ActivityRepository $repository)
    {
        return $repository->findAll();
    }

}
