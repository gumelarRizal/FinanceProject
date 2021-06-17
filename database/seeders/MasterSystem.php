<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSystem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listData = [
            'val1' => [
                'SYSTEM_CD'=>'TITLE_LoginForm',
                'SYSTEM_VALUE'=>'Masuk untuk memulai Aplikasi'
            ],
            'VAL2' => [
                'SYSTEM_CD'=>'TITLE_LoginPage',
                'SYSTEM_VALUE'=>'Finance Project'
            ]
        ];
        foreach($listData as $list){
            DB::table('mt_system')->insert([
                'SYSTEM_CD' => $list['SYSTEM_CD'],
                'SYSTEM_VALUE' => $list['SYSTEM_VALUE'],
                'CREATED_BY' => 'RIZAL',
                'created_at' => date('Y-m-d h:i:s')
            ]);
        }
    }
}
