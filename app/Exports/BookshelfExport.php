<?php

namespace App\Exports;

use App\Models\Bookshelf;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookshelfExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bookshelf::select('id', 'code', 'name')->get();
    }
}
