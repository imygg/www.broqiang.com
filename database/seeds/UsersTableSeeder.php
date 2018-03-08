<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert($this->prepareData());
    }

    protected function prepareData()
    {
        return [
            [
                'name'       => 'BroQiang',
                'avatar'     => 'http://image.broqiang.com//broqiang/logo320.png',
                'email'      => 'broqiang@qq.com',
                'password'   => bcrypt('123123'),
                'is_admin'   => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'       => 'bro',
                'avatar'     => 'http://image.broqiang.com//broqiang/logo320.png',
                'email'      => 'broqiang@yeah.net',
                'password'   => bcrypt('123123'),
                'is_admin'   => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
    }
}
