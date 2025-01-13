<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WaliSantriResource\Pages;
use App\Filament\Resources\WaliSantriResource\RelationManagers;
use App\Models\WaliSantri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WaliSantriResource extends Resource
{
    protected static ?string $model = WaliSantri::class;

    protected static ?string $navigationIcon = 'heroicon-m-users';

    protected static ?string $navigationLabel = 'Data Wali Santri';

    protected static ?string $navigationGroup = 'Data';

    protected static ?int $navigationSort = 32;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nama_ayah')
                    ->label('Nama Ayah')
                    ->required(),
                Forms\Components\TextInput::make('nama_ibu')
                    ->label('Nama Ibu')
                    ->required(),
                Forms\Components\TextInput::make('no_hp')
                    ->label('No HP')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_ayah')
                    ->label('Nama Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_ibu')
                    ->label('Nama Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->label('No HP')
                    ->searchable(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWaliSantris::route('/'),
        ];
    }
}
