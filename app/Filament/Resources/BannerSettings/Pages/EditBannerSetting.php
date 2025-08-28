<?php

namespace App\Filament\Resources\BannerSettings\Pages;

use App\Filament\Resources\BannerSettings\BannerSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBannerSetting extends EditRecord
{
    protected static string $resource = BannerSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
