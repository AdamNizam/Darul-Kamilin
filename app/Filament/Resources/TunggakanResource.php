<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use App\Models\TunggakanSantri;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use App\Filament\Resources\TunggakanResource\Pages;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\CheckboxColumn;

class TunggakanResource extends Resource
{
    protected static ?string $model = TunggakanSantri::class;

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $navigationLabel = 'Tunggakan';

    protected static ?string $navigationIcon = 'heroicon-m-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Forms')
                ->tabs([
                    Tab::make('Santri & Tunggakan')
                    ->Schema([
                        Select::make('santri_id')
                        ->label('Santri')
                        ->relationship('santri', 'nama')
                        ->required(),

                        Select::make('kategori_tunggakan_id')
                        ->label('Kategori Tunggakan')
                        ->relationship('kategoriTunggakan', 'nama')
                        ->required(),
                    ]),
                ]),
                Tabs::make('Forms')
                ->tabs([
                    Tab::make('Bulan & Tahun')
                    ->Schema([
                        Select::make('tahun')
                        ->label('Tahun')
                        ->options(array_combine(range(date('Y'), 2021), range(date('Y'), 2021)))
                        ->required(),

                        Select::make('January')
                        ->label('January')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('February')
                        ->label('February')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('March')
                        ->label('March')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('April')
                        ->label('April')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('May')
                        ->label('May')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('June')
                        ->label('June')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('Juny')
                        ->label('Juny')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('August')
                        ->label('August')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('September')
                        ->label('September')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('October')
                        ->label('October')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('November')
                        ->label('November')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                        Select::make('December')
                        ->label('December')
                        ->options([
                            1 => 'Lunas',
                            0 => 'Belum Lunas',
                        ])
                        ->hidden(true)
                        ->default(0),
                    ]),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('santri.nama')
                    ->label('Nama Santri')
                    ->searchable(),

                Tables\Columns\TextColumn::make('santri.walisantri.nama_ayah')
                    ->label('Nama Ayah'),

                Tables\Columns\TextColumn::make('santri.walisantri.nama_ibu')
                    ->label('Nama Ibu'),

                Tables\Columns\TextColumn::make('kategoriTunggakan.nama')
                ->label('Jenis Tunggakan')
                ->color('warning'),


                Tables\Columns\TextColumn::make('kategoriTunggakan.jumlah')
                ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                ->prefix('Rp ')
                ->suffix(' / Bulan')
                ->label('Jumlah'),

                CheckboxColumn::make('January')
                ->toggleable(isToggledHiddenByDefault: false)
                ->afterStateUpdated(function (bool $state, $record) {
                    $record->update(['January' => $state ? 1 : 0]);
                }),

                CheckboxColumn::make('February')
                ->toggleable(isToggledHiddenByDefault: false)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['February' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('March')
                ->toggleable(isToggledHiddenByDefault: false)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['March' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('April')
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['April' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('May')
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['May' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('June')
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['June' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('July')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['July' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('August')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['August' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('September')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['September' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('October')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['October' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('November')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['November' => $state ? 1 : 0]);
                    }),

                CheckboxColumn::make('December')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->afterStateUpdated(function (bool $state, $record) {
                        $record->update(['December' => $state ? 1 : 0]);
                    }),

                // TextColumn::make('December')
                // ->label('Desember')
                // ->formatStateUsing(fn($state) => $state ? 'Lunas' : 'Belum Lunas')
                // ->color(fn($state) => $state ? 'success' : 'danger')
                // ->icon(fn($state) => $state ? 'heroicon-s-check-badge' : 'heroicon-m-x-circle')
                // ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('tahun'),
            ])
            ->filters([
                //

            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),

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
            'index' => Pages\ListTunggakans::route('/'),
        ];
    }
}
