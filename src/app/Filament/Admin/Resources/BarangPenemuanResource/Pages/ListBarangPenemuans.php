<?php

namespace App\Filament\Admin\Resources\BarangPenemuanResource\Pages;

use App\Filament\Admin\Resources\BarangPenemuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangPenemuans extends ListRecords
{
    protected static string $resource = BarangPenemuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
