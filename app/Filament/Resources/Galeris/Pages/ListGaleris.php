<?php

namespace App\Filament\Resources\Galeris\Pages;

use App\Filament\Resources\Galeris\GaleriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGaleris extends ListRecords
{
    protected static string $resource = GaleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->authorize(true)->visible(fn () => true),
        ];
    }

    protected function getEmptyStateActions(): array
    {
        return [
            CreateAction::make()->visible(fn () => true),
        ];
    }
}
