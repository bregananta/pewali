<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets;

class PewaliDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    protected static string $view = 'filament.pages.pewali-dashboard';
    protected static ?string $title = 'Google Analytics';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\PageViewsWidget::class,
            Widgets\VisitorsWidget::class,
            Widgets\ActiveUsersOneDayWidget::class,
            Widgets\ActiveUsersSevenDayWidget::class,
            Widgets\ActiveUsersTwentyEightDayWidget::class,
            Widgets\SessionsWidget::class,
            Widgets\SessionsDurationWidget::class,
            Widgets\SessionsByCountryWidget::class,
            Widgets\SessionsByDeviceWidget::class,
            Widgets\MostVisitedPagesWidget::class,
            Widgets\TopReferrersListWidget::class,
        ];
    }
}
