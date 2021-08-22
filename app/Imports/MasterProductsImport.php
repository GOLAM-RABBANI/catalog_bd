<?php

namespace App\Imports;

use App\Models\MasterProduct;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class MasterProductsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user_id = Auth::id();
        return new MasterProduct([
            'productTitle' => $row['producttitle'],
            'imageUrls' => $row['imageurls'],
            'productDescription' => $row['productdescription'],
            'created_by' => $user_id,
        ]);
    }
}
