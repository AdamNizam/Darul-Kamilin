<?php

namespace App\Filament\Resources\KategoriTunggakanResource\Pages;

use App\Filament\Resources\KategoriTunggakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriTunggakan extends EditRecord
{
    protected static string $resource = KategoriTunggakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
