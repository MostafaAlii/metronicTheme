<?php
namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function index(UserDataTable $user) {
		return $user->render('dashboard.users.index', ['title' => 'User Control']);
	}
}