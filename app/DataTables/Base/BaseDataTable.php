<?php
namespace App\DataTables\Base;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

abstract class BaseDataTable extends DataTable {
    public function __construct(protected Model $model) {
        $model = $this->model;
    }

    abstract protected function dataTable(QueryBuilder $query): EloquentDataTable;

    abstract protected function query();

    public function html(): HtmlBuilder {
        return $this->builder()
        ->setTableId($this->model->getTable() . '_datatable')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->parameters($this->getParameters());
    }

    abstract protected function getColumns(): array;

    protected function getParameters() {
        return [
            'dom' => 'Blfrtip',
            'lengthMenu' => [
                [10, 25, 50, 100, 500, 750, -1],
                ['10', '25 ', '50 ', '100 ', '500 ', '750', trans('datatable.all_records')]
            ],
            'buttons' => [
                [
                    'extend' => 'csv',
                    'className' => 'btn btn-primary',
                    'text' => "<i class='fa fa-file'></i>" . trans('datatable.ex_csv')
                ],
                [
                    'extend' => 'excel',
                    'className' => 'btn btn-success',
                    'text' => "<i class='fa fa-file'></i>" . trans('datatable.ex_excel')
                ],
                [
                    'extend' => 'print',
                    'className' => 'btn btn-info',
                    'text' => "<i class='fa fa-print'></i>" . trans('datatable.print')
                ],
                [
                    'extend' => 'reload',
                    'className' => 'btn btn-dark',
                    'text' => "<i class='fa fa-sync-alt'></i>" . trans('datatable.reload')
                ],
            ],
            //'language' => datatable_lang(),
        ];
    }

    protected function filename(): string {
        return $this->model->getTable() . '_' . date('YmdHis');
    }
}