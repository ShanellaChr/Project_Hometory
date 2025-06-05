<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function index(Request $request)
    {
        // Ambil bulan dari query, default ke bulan sekarang
        $monthParam = $request->query('month');
        $currentMonth = $monthParam
            ? Carbon::createFromFormat('Y-m', $monthParam)->startOfMonth()
            : now()->startOfMonth();

        // Batas bulan tersedia (hardcoded)
        $earliestMonth = Carbon::create(2024, 4, 1)->startOfMonth();
        $latestMonth = Carbon::create(2025, 5, 1)->startOfMonth();

        // Clone untuk menghindari manipulasi langsung
        $prevMonth = $currentMonth->copy()->subMonth();
        $nextMonth = $currentMonth->copy()->addMonth();

        return view('statistic.statisticPage', [
            'currentMonth' => $currentMonth,
            'prevMonth' => $prevMonth,
            'nextMonth' => $nextMonth,
            'hasPrev' => $prevMonth->greaterThanOrEqualTo($earliestMonth),
            'hasNext' => $nextMonth->lessThanOrEqualTo($latestMonth),
        ]);
    }
}
