<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = new User([
            //
            "name"=>$row['name'],
            "email"=>$row['email'],
            "usertype"=>0,
            "password"=> Hash::make('password')
        ]);

        DB::table('model_has_roles')->where('modle_id', $user->id)->delete();
        $user->assignRole($user->role_id);
    }
}
