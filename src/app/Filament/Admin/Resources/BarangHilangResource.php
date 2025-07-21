<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BarangHilangResource\Pages;
use App\Models\BarangHilang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class BarangHilangResource extends Resource
{
    protected static ?string $model = BarangHilang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Laporan';
    protected static ?string $navigationLabel = 'Laporan Barang Hilang';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelapor')->searchable()->label('Pelapor'),
                TextColumn::make('jenis_barang')->searchable()->label('Jenis Barang'),
                TextColumn::make('lokasi')->label('Lokasi'),
                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'Dilaporkan',
                        'warning' => 'Ditemukan',
                        'success' => 'Diambil',
                    ])
                    ->label('Status'),
                TextColumn::make('created_at')
                    ->date('d M Y')
                    ->label('Dilaporkan Pada'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Dilaporkan' => 'Dilaporkan',
                        'Ditemukan' => 'Ditemukan',
                        'Diambil' => 'Diambil',
                    ])
                    ->label('Filter Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangHilangs::route('/'),
            'create' => Pages\CreateBarangHilang::route('/create'),
            'edit' => Pages\EditBarangHilang::route('/{record}/edit'),
        ];
    }
}
