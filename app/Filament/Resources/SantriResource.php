<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Santri;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\SantriResource\Pages;

class SantriResource extends Resource
{
    protected static ?string $model = Santri::class;

    protected static ?string $navigationIcon = 'heroicon-c-user-group';

    protected static ?string $navigationGroup = 'Data';

    protected static ?int $navigationSort = 31;

    protected static ?string $navigationLabel = 'Data Santri';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Forms')
                    ->tabs([
                        Tab::make('Identitas')
                            ->schema([
                                TextInput::make('nama')
                                    ->label('Nama')
                                    ->required(),

                                TextInput::make('alamat')
                                    ->label('Alamat')
                                    ->required(),

                                TextInput::make('tempat_tgl')
                                    ->label('Tempat Tgl')
                                    ->required(),

                                Select::make('jenis_kelamin')
                                    ->label('Jenis Kelamin')
                                    ->options([
                                        'Laki-laki' => 'Laki-laki',
                                        'Perempuan' => 'Perempuan',
                                    ])
                                    ->required(),
                            ]),

                        Tab::make('Pendidikan')
                            ->schema([
                                Select::make('tingkat_pendidikan')
                                    ->label('Tingkat Pendidikan')
                                    ->options([
                                        'SD' => 'SD',
                                        'MTS' => 'MTS',
                                        'SMK' => 'SMK',
                                        'MA' => 'MA',
                                        'Perguruan Tinggi' => 'Perguruan Tinggi',
                                    ])
                                   ->required(),
                            ]),

                        Tab::make('Wali Santri')
                        ->schema([
                            Select::make('wali_santri_id')
                            ->label('Wali Santri')
                            ->relationship('waliSantri', 'nama_ayah')
                            ->getOptionLabelFromRecordUsing(fn ($record) =>$record->id.'. '. $record->nama_ayah . ' - ' . $record->nama_ibu)
                            ->required(),
                        ]),

                        Tab::make('Gambar')
                            ->schema([
                                FileUpload::make('gambar')
                                    ->label('Gambar')
                                    ->image(),
                            ])
                    ])
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar Santri')
                    ->defaultImageUrl(function ($record) {
                        if ($record->jenis_kelamin == 'Laki-laki') {
                            return asset('logo/man.png'); // Gambar untuk laki-laki
                        } else {
                            return asset('logo/human.png'); // Gambar untuk perempuan
                        }
                    }),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Santri')
                    ->searchable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),

                Tables\Columns\TextColumn::make('tempat_tgl')
                    ->label('Tempat Tgl'),

                Tables\Columns\TextColumn::make('tingkat_pendidikan')
                    ->label('Tingkat Pendidikan'),

                Tables\Columns\TextColumn::make('waliSantri.nama_ayah')
                    ->label('Nama Ayah'),

                Tables\Columns\TextColumn::make('waliSantri.nama_ibu')
                    ->label('Nama Ibu'),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('tingkat_pendidikan')
                    ->label('Tingkat Pendidikan')
                    ->options([
                        'SD' => 'SD',
                        'MTS' => 'MTS',
                        'SMK' => 'SMK',
                        'MA' => 'MA',
                        'Perguruan Tinggi' => 'Perguruan Tinggi',
                    ]),
                Tables\Filters\SelectFilter::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ]),
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
            'index' => Pages\ListSantris::route('/'),
        ];
    }
}
