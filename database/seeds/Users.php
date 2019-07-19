<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('id',1)->update([
            'phone' => '094321421',
            'address' => 'Nghe An - Vietnamese',
            'slogan' => 'Nerver give up !',
            'skill' => 'HTML Javascript',
            'education' => 'Vinhuni ',
        ]);
 
    }
}
