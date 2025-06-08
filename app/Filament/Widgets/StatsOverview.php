<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\ClassFaculty;
use App\Models\Faculty;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Classes', ClassFaculty::count())
                ->description('Active classes')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('primary'),
            
            Stat::make('Total Faculty', Faculty::count())
                ->description('Registered faculty members')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            
            Stat::make('Total Students', Registration::where('status', 'approved')->count())
                ->description('Approved students')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('warning'),
            
            Stat::make('Total Students', Registration::where('status', 'rejected')->count())
                ->description('Reject students')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('danger'),
            
            Stat::make('Total Registrations', Registration::count())
                ->description('All registrations')
                ->descriptionIcon('heroicon-m-document-check')
                ->color('info'),
        ];
    }
} 