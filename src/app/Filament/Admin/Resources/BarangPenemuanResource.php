<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BarangPenemuanResource\Pages;
use App\Models\BarangPenemuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class BarangPenemuanResource extends Resource
{
    protected static ?string $model = BarangPenemuan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Barang Penemuan';
    protected static ?string $pluralModelLabel = 'Barang Penemuan';
    protected static ?string $navigationGroup = 'Data Laporan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pelapor')->required(),
                TextInput::make('jenis_barang')->required(),
                TextInput::make('lokasi')->required(),
                Textarea::make('ciri_ciri')->required(),
                Select::make('status')
                    ->options([
                        'Dilaporkan' => 'Dilaporkan',
                        'Diambil' => 'Diambil',
                    ])
                    ->default('Dilaporkan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelapor')->searchable(),
                TextColumn::make('jenis_barang')->searchable(),
                TextColumn::make('lokasi'),
                TextColumn::make('status')->badge(),
                TextColumn::make('created_at')->dateTime('d M Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangPenemuans::route('/'),
            'create' => Pages\CreateBarangPenemuan::route('/create'),
            'edit' => Pages\EditBarangPenemuan::route('/{record}/edit'),
        ];
    }
}
