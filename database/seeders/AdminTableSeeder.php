<?php
namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Enums\Admin\AdminStatus;
use Illuminate\Support\Facades\{DB, Schema};
class AdminTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('admins')->truncate();
        $admin = Admin::create([
            'name'          =>  'Mostafa',
            'email'         =>  'admin@admin.com',
            //'password'      =>  bcrypt('123123'),
            'remember_token' => Str::random(10),
            'status' => /*AdminStatus::ACTIVE*/ 'active',
            'email_verified_at' => now()
        ]);
        env('APP_ENV') === 'local' ? Admin::factory()->count(10)->create() : $admin;
        Schema::enableForeignKeyConstraints();
    }
}