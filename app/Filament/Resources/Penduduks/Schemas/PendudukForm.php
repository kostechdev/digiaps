<?php

namespace App\Filament\Resources\Penduduks\Schemas;

use App\Enums\JenisKelamin;
use App\Enums\Agama;
use App\Enums\StatusPerkawinan;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PendudukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nik')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->inputMode('numeric')
                    ->placeholder('Masukkan 16 digit NIK')
                    ->length(16)
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $set('nik', sprintf('%.0f', $state));
                        }
                    })
                    ->rules(['regex:/^[0-9]{16}$/'])
                    ->helperText('NIK harus 16 digit angka'),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->required()
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ]),
                Select::make('agama')
                    ->required()
                    ->options([
                        'Islam' => 'Islam',
                        'Kristen' => 'Kristen',
                        'Katolik' => 'Katolik',
                        'Hindu' => 'Hindu',
                        'Buddha' => 'Buddha',
                        'Konghucu' => 'Konghucu',
                    ]),
                TextInput::make('pekerjaan'),
                TextInput::make('alamat')
                    ->required(),
                TextInput::make('no_hp'),
                Select::make('status_perkawinan')
                    ->required()
                    ->options([
                        'Belum Menikah' => 'Belum Menikah',
                        'Menikah' => 'Menikah',
                        'Cerai Hidup' => 'Cerai Hidup',
                        'Cerai Mati' => 'Cerai Mati',
                    ]),
            ]);
    }
}
