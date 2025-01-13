<?php

namespace App\Filament\Resources\UserLoginResource\Pages;

use App\Filament\Resources\UserLoginResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserLogins extends ListRecords
{
    protected static string $resource = UserLoginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
