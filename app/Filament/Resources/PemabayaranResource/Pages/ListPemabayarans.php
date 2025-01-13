<?php

namespace App\Filament\Resources\PemabayaranResource\Pages;

use App\Filament\Resources\PemabayaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemabayarans extends ListRecords
{
    protected static string $resource = PemabayaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
