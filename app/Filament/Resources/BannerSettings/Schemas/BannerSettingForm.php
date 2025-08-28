<?php

namespace App\Filament\Resources\BannerSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BannerSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->rows(3)
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->directory('banner-images')
                    ->required()
                    ->columnSpanFull()
                    ->saveUploadedFileUsing(function ($file, $record) {
                        return \App\Services\DualStorageUploadService::store($file, 'banner-images');
                    })
                    ->deleteUploadedFileUsing(function ($file) {
                        \App\Services\DualStorageUploadService::delete($file);
                    }),
                TextInput::make('link_cta')
                    ->label('Link CTA')
                    ->nullable()
                    ->rules(['nullable', 'regex:/^(https?:\/\/|#)/i']),
                TextInput::make('text_cta')
                    ->default('Selengkapnya')
                    ->label('Teks CTA')
                    ->nullable(),
                Toggle::make('aktif')
                    ->default(true),
                TextInput::make('urutan')
                    ->numeric()
                    ->default(1)
                    ->minValue(1),
            ]);
    }
}
