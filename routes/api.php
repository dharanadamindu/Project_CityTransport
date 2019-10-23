<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/nearest-halts', function () {
    
    //    dd(request()->all());
        $center=request('center');
        $lat=$center['lat'];
        $lng=$center['lng'];
    //    $lat=35.985510;
    //    $lng=-121.561489;
        $distance=request('radius')??200;
        $results = DB::select(DB::raw('SELECT *, (3959 * acos( cos( radians(' . $lat . ') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(' . $lng . ') ) + sin( radians(' . $lat .') ) * sin( radians(lat) ) ) ) AS distance FROM halts HAVING distance < ' . $distance . ' ORDER BY distance') );
    
        $markers = collect($results)->map(function ($item, $key) {
            return [
                'position' => ['lat' => $item->lat, 'lng' => $item->lng],
                'name'=>$item->name,
                'timetable'=>$item->tim ,
            ];
        });
    
        $formattedResults = collect($results)->map(function ($item, $key) {
            return [
                'text'=>$item->name,
            ];
        });
    
    
        $data=[
            'status'=>'success',
            'markers'=>$markers,
            'results'=>$formattedResults
        ];

        return response($data,200);
    });
