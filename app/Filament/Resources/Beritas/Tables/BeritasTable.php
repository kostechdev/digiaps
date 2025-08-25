<?php

namespace App\Filament\Resources\Beritas\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use App\Models\User;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori')
                    ->searchable(),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('gambar')
                    ->square()
                    ->width(100),
                TextColumn::make('penulis')
                    ->label('Penulis')
                    ->formatStateUsing(fn ($state) => User::find($state)?->name ?? '-')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->filters([
                //
            ]);
    }
}