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

        // Bulan sekarang (real time)
        $nowMonth = now()->startOfMonth();

        // Batas bulan tersedia (hardcoded)
        // Batas bulan tersedia (otomatis 12 bulan)
        $latestMonth = now()->startOfMonth(); // bulan sekarang
        $earliestMonth = $latestMonth->copy()->subMonths(11); // 12 bulan ke belakang termasuk bulan ini

        // Clone untuk navigasi
        $prevMonth = $currentMonth->copy()->subMonth();
        $nextMonth = $currentMonth->copy()->addMonth();

        return view('statistic.statisticPage', [
            'currentMonth' => $currentMonth,
            'nowMonth' => $nowMonth, // <-- Ditambahkan untuk keperluan highlight bulan saat ini
            'prevMonth' => $prevMonth,
            'nextMonth' => $nextMonth,
            'hasPrev' => $prevMonth->greaterThanOrEqualTo($earliestMonth),
            'hasNext' => $nextMonth->lessThanOrEqualTo($latestMonth),
        ]);
    }
}
