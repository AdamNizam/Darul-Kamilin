<?php

namespace App\Filament\Resources\PemabayaranResource\Pages;

use App\Filament\Resources\PemabayaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemabayaran extends EditRecord
{
    protected static string $resource = PemabayaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
