<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class ExampleImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $rows)
    {
        return $row;
    }
}
