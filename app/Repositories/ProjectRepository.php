<?php

namespace app\Repositories;

use DB;

class ProjectRepository
{
    /**
     * Get all the projects (for scheduler)
     * @return Array all the projects
     */
    public function findAll()
    {
        return DB::table('projects')
            ->select('id as key')
            ->addSelect('name as label')
            ->orderBy('name')
            ->get();
    }

}
