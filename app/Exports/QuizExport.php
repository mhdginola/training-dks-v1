<?php

namespace App\Exports;

use App\Models\Quiz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuizExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Quiz::all();
    }

    public function headings(): array
    {
        return [
            [''],
            ['date','121212'],
            [''],
            ['Nama Tenant'],
            [
              // '',
              // '',
              '#',
              'User',
              'Date',
            ],
        ];
    }
}
