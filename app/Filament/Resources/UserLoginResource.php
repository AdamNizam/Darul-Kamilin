<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\UserLog;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use App\Filament\Resources\UserLoginResource\Pages;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class UserLoginResource extends Resource
{
    protected static ?string $model = UserLog::class;

    protected static ?string $navigationGroup = 'Data';

    protected static ?int $navigationSort = 33;

    protected static ?string $navigationLabel = 'Data Akun';

    protected static ?string $navigationIcon = 'heroicon-s-user';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make([
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->label('Username'),

                Forms\Components\TextInput::make('password')
                    ->required()
                    ->password()
                    ->label('Password')
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state)),

                    Select::make('wali_santri_id')
                    ->label('Wali Santri')
                    ->relationship('waliSantri', 'nama_ayah')
                    ->getOptionLabelFromRecordUsing(fn ($record) =>$record->id.'.'. $record->nama_ayah . ' - ' . $record->nama_ibu)
                    ->required(),
            ])
            ->columnSpan('full')
            , // Opsional untuk pengaturan grid
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('username')
                    ->label('Username')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('password')
                    ->label('Password')
                    ->sortable()
                    ->getStateUsing(fn ($record) => '********'),

                TextColumn::make('wali_santri_id')
                    ->label('Wali Santri')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUserLogins::route('/'),
        ];
    }
}
