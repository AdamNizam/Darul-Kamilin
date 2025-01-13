<?php

namespace App\Filament\Resources\KategoriTunggakanResource\Pages;

use App\Filament\Resources\KategoriTunggakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriTunggakans extends ListRecords
{
    protected static string $resource = KategoriTunggakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
