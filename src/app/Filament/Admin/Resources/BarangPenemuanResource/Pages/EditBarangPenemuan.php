<?php

namespace App\Filament\Admin\Resources\BarangPenemuanResource\Pages;

use App\Filament\Admin\Resources\BarangPenemuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangPenemuan extends EditRecord
{
    protected static string $resource = BarangPenemuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
