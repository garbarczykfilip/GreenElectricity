<?php

namespace App\Repositories\Magazine;

use App\Entities\Magazine;
use Illuminate\Http\Request;

class MagazineRepository implements MagazineRepositoryInterface
{
    public function getById($id)
    {
        $magazine = Magazine::find($id);

        return $magazine ? response()->json($magazine, 200) : response()->json(['status' => 'Not Found'], 404);
    }

    public function search(Request $request)
    {
        if (empty($request->publisher_id) && empty($request->name))
        {
            return response()->json(['status' => 'No parameters given'], 422);
        }

        $magazines = Magazine::where(function ($query) use ($request) {
            if (!empty($request->publisher_id))
            {
                $query->where('publisher_id', '=', $request->publisher_id);
            }

            if (!empty($request->name))
            {
                $query->where('name', 'LIKE', '%'.$request->name.'%');
            }
        })
        ->paginate(5)->appends(request()->input());

        return $magazines->count() > 0
        ? response()->json($magazines, 200)
        : response()->json(['status' => 'Not Found'], 404);        
    }
}