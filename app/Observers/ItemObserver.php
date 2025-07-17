<?php

namespace App\Observers;

use App\Models\Item;
use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Statistic;

class ItemObserver
{
    public function created(Item $item)
    {
        app(StatisticController::class)->updateStatisticForSingleItem($item);
    }

    public function updated(Item $item)
    {
        // Cek apakah kategori item berubah
        if ($item->wasChanged('category_id')) {
            $userId = $item->user_id;
            $createdMonth = Carbon::parse($item->created_at)->format('Y-m');
            $oldCategoryId = $item->getOriginal('category_id');
            $newCategoryId = $item->category_id;

            // Hitung total qty dari semua expirationDates milik item ini
            $totalQty = $item->expirationDates()->sum('qty');

            // Kurangi total dari kategori lama
            Statistic::where('user_id', $userId)
                ->where('month_year', $createdMonth)
                ->where('category_id', $oldCategoryId)
                ->decrement('total_items', $totalQty);

            // Tambahkan total ke kategori baru
            Statistic::updateOrInsert(
                [
                    'user_id' => $userId,
                    'month_year' => $createdMonth,
                    'category_id' => $newCategoryId,
                ],
                [
                    'total_item' => DB::raw("COALESCE(total_item, 0) + {$totalQty}"),
                ]
            );
        }
    }

    public function deleted(Item $item)
    {
        app(StatisticController::class)->updateStatisticForSingleItem($item);
    }
}
