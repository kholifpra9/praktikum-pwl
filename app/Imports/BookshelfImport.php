<?php

namespace App\Imports;

use App\Models\Bookshelf;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BookshelfImport implements WithHeadingRow, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bookshelf([
            'code' => $row['code'],
            'name' => $row['name']
        ]);
    }
}