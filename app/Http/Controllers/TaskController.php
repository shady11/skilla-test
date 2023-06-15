<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // получение данных в зависимости от параметров запроса
        $query = Task::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')]);
        }

        if ($request->has('filter_field') && $request->input('filter_field')) {
            $query->where('filter_field', $request->input('filter_field'));
        }

        $data = $query->get();

        // ответ в json
        return response()->json(['data' => $data], 200);
    }
}
