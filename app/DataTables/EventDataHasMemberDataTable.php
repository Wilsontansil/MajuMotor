<?php

namespace App\DataTables;

use App\Models\EventDataHasMember;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Models\Member;

class EventDataHasMemberDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('member_id', function ($data) {
                $member = Member::find($data->member_id);
                return $member->username;
            })
            ->editColumn('status', function ($data) {
                if ($data->status == 'waiting') {
                    return 'Belum Bayar';
                } else {
                    return 'Sudah Bayar';
                }
            })
            ->editColumn('payment_date', function ($data) {
                if ($data->payment_date == null) {
                    return '-';
                } else {
                    return $data->payment_date;
                }
            })
            ->addColumn('action', function ($data) {
                return '';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EventDataHasMember $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EventDataHasMember $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('member-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->pageLength(20)
                    ->responsive(true);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('member_id')->title('Member Name'),
            Column::make('status'),
            Column::make('payment_date'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'EventDataHasMember_' . date('YmdHis');
    }
}
