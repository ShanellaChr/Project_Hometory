<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Item;
use App\Models\ExpirationDate;
use App\Models\Categories;
use Illuminate\Support\Carbon;

class StatisticController extends Controller
{
    public function index(Request $request)
    {
        // Ambil bulan dari query, default ke bulan sekarang
        $monthParam = $request->query('month');
        $currentMonth = $monthParam
            ? Carbon::createFromFormat('Y-m', $monthParam)->startOfMonth()
            : now()->startOfMonth();

        $latestMonth = now()->startOfMonth(); // Bulan paling baru
        $earliestMonth = $latestMonth->copy()->subMonths(11); // 12 bulan ke belakang

        // Navigasi
        $prevMonth = $currentMonth->copy()->subMonth();
        $nextMonth = $currentMonth->copy()->addMonth();
        $hasPrev = $currentMonth->greaterThan($earliestMonth);
        $hasNext = $currentMonth->lessThan($latestMonth);

        // Ambil semua kategori
        $categories = Categories::all();

        // Ambil statistik berdasarkan bulan
        $statistics = Statistic::whereYear('month_year', $currentMonth->year)
            ->whereMonth('month_year', $currentMonth->month)
            ->get();

        // Hitung total item di bulan tersebut
        $totalItems = $statistics->sum('total_items');

        // Siapkan data cards, cocokkan kategori dengan statistik
        $cards = $categories->map(function ($category) use ($statistics, $totalItems) {
            $stat = $statistics->firstWhere('category_id', $category->id);
            $itemTotal = $stat ? $stat->total_items : 0;
            $percentage = $totalItems > 0 ? round(($itemTotal / $totalItems) * 100, 1) : 0;

            return [
                'title' => $category->category,
                'color' => $category->color ?? 'text-muted',
                'value' => $percentage, // ← angka asli (tanpa %)
                'desc' => $this->getCategoryDescription($category->category),
            ];
        });

        return view('statistic.statisticPage', [
            'cards' => $cards,
            'currentMonth' => $currentMonth,
            'prevMonth' => $prevMonth,
            'nextMonth' => $nextMonth,
            'hasPrev' => $hasPrev,
            'hasNext' => $hasNext,
        ]);
    }

    private function getCategoryDescription($category)
    {
        return match ($category) {
            'Personal Care' => 'Makeup, body care, facial care, hair care, perfume, feminine hygiene & diapers, dental & oral care, and others.',
            'Foods' => 'Instant foods, snacks, canned foods, jams and cereals, and others.',
            'Beverages' => 'Dairy products, soft drinks, instant drinks, and others.',
            'Kitchen Needs' => 'Kitchen & dining equipment, spices, baking ingredients, cooking ingredients, and others.',
            'Household Essentials' => 'Care & cleaning, home supplies, air fresheners & dehumidifiers, pest & insect repellent, and others.',
            'Health Supplies' => 'Medicines, vitamins & supplements, medical devices, hygiene products, and others.',
            default => 'Other category.',
        };
    }
}
