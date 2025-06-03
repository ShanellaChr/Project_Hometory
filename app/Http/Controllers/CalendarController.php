<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;

class CalendarController extends Controller
{
    // controller ini untuk bikin kalender dinamis, jadi tanggal2 kalendernya akurat dengan irl (Gregorian Calendar ya)

    // request jadi parameter, karena user bakal click tanggal dan itu akan request list of items to expire di tgl itu
    public function show(Request $request){
        // untuk dapetin value bulan dan tahun di waktu user buka kalender
        $month = $request->input('month', now()->month);
        $year = $request->input('year', now()->year);
        // bikin variable datatype tanggal, bulan, dan tgl 1. bakal dipake lagi dibawah
        $date = new DateTime("$year-$month-01");

        // ambil jumlah hari dalam bulan berdasarkan bulan dan tahun yang udah kita set di $date
        $daysInMonth = $date->format('t');
        // hari dari tgl 1 dari bulan tahun yg kita setel (misal juni 2025, $firstDay outputnya 0 --> minggu)
        $firstDay = $date->format('w');

        // code untuk ambil tanggal expire dari database
        // reserved for it bc no db now

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
        return view('calendar.calendarPage', compact('date', 'daysInMonth', 'firstDay', 'prevMonth', 'prevYear', 'nextMonth', 'nextYear'));
    }
}
