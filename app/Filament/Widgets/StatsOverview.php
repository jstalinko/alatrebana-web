<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Product', \App\Models\Product::count()),
            Stat::make('Total Category', \App\Models\Category::count()),
            Stat::make('Total Views', \App\Models\Product::sum('views')),
        ];
    }
}
