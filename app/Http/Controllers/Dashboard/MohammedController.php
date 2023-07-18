<?php
namespace App\Http\Controllers\Dashboard;
use App\DataTables\MohammedDataTable;
use App\Http\Controllers\Controller;
class MohammedController extends Controller {
    public function index(MohammedDataTable $mDataTable) {
        return $mDataTable->render('dashboard.users.m');
    }
}