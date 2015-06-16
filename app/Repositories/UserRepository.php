<?php

namespace App\Repositories;

use DB;

class UserRepository {

    /**
     * Get all the users (for scheduler)
     * @return Array all the users
     */
    public function findAll()
    {
        return DB::table('users')
            ->select('id as key')
            ->addSelect(DB::raw('CONCAT_WS(\' \', first_name, last_name) AS label'))
            ->orderBy('last_name')
            ->get();
    }

}
