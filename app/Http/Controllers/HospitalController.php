<?php

namespace App\Http\Controllers;

use App\Division;
use App\Hospital;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HospitalController extends Controller
{
    public function typeAhead($query) {
        $query==null && $query = 'a';
        $hospitals = Hospital::where('name', 'like', '%'.$query.'%')->take(8)->get();
        $hospitals = $hospitals->map(function ($hospital){
            return $hospital->name;
        });
        return response()->json($hospitals);
    }

    public function hospitals() {
        $hospitals = Hospital::all();
        $divisions = Division::all();
        return view('admin.hospital-list', compact('hospitals'), compact('divisions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(), [
            'district' => 'required',
            'division'     => 'required',
            'hospital'  => 'required'
        ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $hospital = new Hospital();
        $hospital->name = $request->hospital;
        $hospital->slug = str_slug($request->hospital);
        $hospital->district_id = $request->district;
        $hospital->division_id = $request->division;
        $hospital->save();
        return response()->json([
                'message' => 'Hospital added',
                'hospital' => $hospital
            ]);
    }

    public function location($hospital, Request $request) {
        $hospitals = Hospital::where("name", $hospital)->get();
        if(!$hospitals->count()) {
                return response()->json([
                    "message" => "Not found"
                ], 404);
        }
        $locations = $hospitals->map(function ($hospital){
            $district = $hospital->district;
            $division = $district->division;
            return [
                "district" => $district,
                "division" => $division,
                "hospital" => $hospital
            ];
        });
        return response()->json($locations, 200);
    }
}
