<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MohammedDataTable extends DataTable {

    public function dataTable($query) {
        return DataTables::of($query)
            ->addColumn('action', 'dashboard.users.btn.actions');
    }
    
    public function query() {
        return User::query();    
    }

    public function html() {
        return $this->builder()
                    ->setTableId('mohammed-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax();
    }

    public function getColumns() {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(true)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }
    
    protected function filename(): string {
        return 'Mohammed_' . date('YmdHis');
    }
}