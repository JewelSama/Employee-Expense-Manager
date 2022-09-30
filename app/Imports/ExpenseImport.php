<?php

namespace App\Imports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExpenseImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Expense([
                'date' => $row['expense_date'],
                'merchant' => $row['merchant'],
                'total' => $row['total'],
                'status' => $row['status'],
                'comment' => $row['comment'],
        ]);
    }
}
