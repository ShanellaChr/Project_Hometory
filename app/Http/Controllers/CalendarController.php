<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ExpirationDate;
use DateTime;

class CalendarController extends Controller
{
    // controller ini untuk bikin kalender dinamis, jadi tanggal2 kalendernya akurat dengan irl (Gregorian Calendar ya)

    // request jadi parameter, karena user bakal click tanggal dan itu akan request list of items to expire di tgl itu
    public function show(Request $request, $month = null, $year = null, $selected_date = null){
        // untuk dapetin value bulan dan tahun di waktu user buka kalender
        $month = $month ?? $request->input('month', now()->month);
        $year = $year ?? $request->input('year', now()->year);
        $selectedDate = $selected_date ?? $request->input('selected_date', null);
        // bikin variable datatype tanggal, bulan, dan tgl 1. bakal dipake lagi dibawah
        $date = new DateTime("$year-$month-01");

        // ambil jumlah hari dalam bulan berdasarkan bulan dan tahun yang udah kita set di $date
        $daysInMonth = $date->format('t');
        // hari dari tgl 1 dari bulan tahun yg kita setel (misal juni 2025, $firstDay outputnya 0 --> minggu)
        $firstDay = $date->format('w');

        // code untuk ambil tanggal expire dari database
        // Fetch days with expirations for the current month
        $expirations = Item::whereHas('expirationDates', function ($query) use ($month, $year) {
            $query->whereMonth('expiration_date', $month)
                ->whereYear('expiration_date', $year);
        })
        ->with('expirationDates')
        ->get()
        ->pluck('expirationDates')
        ->flatten()
        ->pluck('expiration_date')
        ->map(function ($expirationDate) {
            return (int) (new DateTime($expirationDate))->format('d');
        })
        ->unique()
        ->values()
        ->toArray();

        $selectedItems = [];
        if ($selectedDate) {
            // Fetch items expiring on the selected date
            $selectedItems = Item::whereHas('expirationDates', function ($query) use ($selectedDate) {
                $query->whereDate('expiration_date', $selectedDate);
            })
            ->with(['subcategory', 'expirationDates' => function ($query) use ($selectedDate) {
                $query->whereDate('expiration_date', $selectedDate);
            }])
            ->get();
        }

        // ini logic utk perhitungan tanggal sblm dan stlh bbulan tahun
        // yang tertulis di kalender

        // ambil value $date, kurangin 1 bulan
        $prevDate = (clone $date)->modify('-1 month');
        // versi bulandepan
        $nextDate = (clone $date)->modify('+1 month');
        // ambil bulan dan tahun dari bulan sebelum dan sesudah
        $prevMonth = $prevDate->format('m');
        $prevYear = $prevDate->format('Y');
        $nextMonth = $nextDate->format('m');
        $nextYear = $nextDate->format('Y');

        // kasih semua data ini ke view
        // masih kurang ngirimin items to expire aja
        return view('calendar.calendarPage', compact('date', 'daysInMonth', 'firstDay', 'expirations', 'selectedDate', 'selectedItems','prevMonth', 'prevYear', 'nextMonth', 'nextYear'));
    }
}
