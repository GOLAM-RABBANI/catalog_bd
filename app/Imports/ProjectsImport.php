<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;


class ProjectsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user_id = Auth::id();
        $data = Category::where('name', '=', $row['category'])->first();
        if ($data) {
            return new Post([
                'product_name' => $row['product_name'],
                'price' => $row['price'],
                'category_id' => $data->id,
                'created_by' => $user_id,
            ]);
        } else {
            $id = Category::create(['name' => $row['category'], 'created_by' => $user_id])->id;
            return new Post([
                'product_name' => $row['product_name'],
                'price' => $row['price'],
                'category_id' =>  $id,
                'created_by' => $user_id,
            ]);
        }
    }
}
