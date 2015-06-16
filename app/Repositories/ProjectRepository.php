<?php

namespace App\Repositories;

use DB;

class ProjectRepository {

    public function findAll()
    {
        return DB::table('projects')
            ->select('id as key')
            ->addSelect('name as label')
            ->orderBy('name')
            ->get();
    }

}
