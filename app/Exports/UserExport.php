<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    /**
     * Exporting from view
     */
    // public function view(): View
    // {
    //     return view('excel_view', [
    //         'data' => User::all(),
    //     ]);
    // }

    /**
     * Exporting from collection with headings
     */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array 
    {
        return[
            '#',
            'name',
            'email',
            'created at',
            'updated at',
        ];
    }
}
