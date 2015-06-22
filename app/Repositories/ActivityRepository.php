<?php

namespace app\Repositories;

use DB;

class ActivityRepository
{
    /**
     * Get all the activities (for scheduler)
     * @return Array all the activities
     */
    public function findAll()
    {
        return DB::table('activities')
            ->join('projects', 'activities.project_id', '=', 'projects.id')
            ->join('users', 'activities.user_id', '=', 'users.id')
            ->select('activities.id')
            ->addSelect('users.id as user_id')
            ->addSelect('projects.id as project_id')
            ->addSelect('start_date')
            ->addSelect('end_date')
            ->addSelect('description')
            ->get();
    }

}
