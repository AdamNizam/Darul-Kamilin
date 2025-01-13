<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriTunggakanResource\Pages;
use App\Filament\Resources\KategoriTunggakanResource\RelationManagers;
use App\Models\KategoriTunggakan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriTunggakanResource extends Resource
{
    protected static ?string $model = KategoriTunggakan::class;

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $navigationIcon = 'heroicon-c-squares-2x2';

    protected static ?string $navigationLabel = 'Kategori';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama')
                    ->unique(),
                TextInput::make('jumlah')
                    ->label('jumlah')
                    ->prefix('Rp')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama'),
                TextColumn::make('jumlah')
                    ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                    ->prefix('Rp ')
                    ->suffix(' / Bulan')
                    ->label('Jumlah'),
                //
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
            'index' => Pages\ListKategoriTunggakans::route('/'),
        ];
    }
}
