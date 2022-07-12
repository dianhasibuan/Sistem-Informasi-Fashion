<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use ConsoleTVs\Facades\Charts;
use App\Models\Outfit;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function index()
    {
    //  $outfits = Outfit::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    //     $chart = Charts::database($outfits, 'bar', 'highcharts')
    //      ->title("Outfit yang Tersedia")
    //      ->elementLabel("Total Outfit")
    //      ->dimensions(1000, 500)
    //      ->responsive(false)
    //      ->groupByMonth(date('Y'), true);
    //     return view('chart',compact('chart'));
    $chart = Charts::create('pie', 'highcharts')
                    ->title('Outfit Chart')
                    ->labels(['Baju', 'Celana', 'Jaket', 'Topi'])
                    ->dimensions(1000,500)
                    ->responsive(false);
    return view('charts',compact('chart'));
    }
}
