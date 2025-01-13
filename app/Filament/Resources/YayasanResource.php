<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Yayasan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Infolists\Components\Tabs\Tab;
use App\Filament\Resources\YayasanResource\Pages;

class YayasanResource extends Resource
{
    protected static ?string $model = Yayasan::class;

    protected static ?string $navigationIcon = 'heroicon-m-building-library';

    protected static ?string $navigationLabel = 'Profile yayasan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Forms')
                    ->schema([
                        Forms\Components\Card::make('Profile Yayasan')
                            ->schema([
                                Forms\Components\TextInput::make('nama_yayasan')
                                    ->label('Nama Pondok Pesantren')
                                    ->required(),
                                Forms\Components\TextInput::make('alamat')
                                    ->label('Alamat Pondok Pesantren')
                                    ->required(),
                                Forms\Components\TextInput::make('telepon')
                                    ->label('Telepon Pondok Pesantren')
                                    ->required(),
                                Forms\Components\TextInput::make('email')
                                    ->label('Email Pondok Pesantren')
                                    ->required(),
                                Forms\Components\Textarea::make('sejarah_yayasan')
                                    ->label('Sejarah Pondok Pesantren')
                                    ->required(),
                                Forms\Components\Textarea::make('deskripsi_yayasan')
                                    ->label('Visi Pondok Pesantren')
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Card::make('Gambar')
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo')
                                    ->image()
                                    ->required(),

                                Forms\Components\FileUpload::make('benner')
                                    ->label('Gambar Ilustrasi / Benner')
                                    ->image()
                                    ->required(),

                                Forms\Components\FileUpload::make('thumbnail_satu')
                                    ->label('Thumbnail 1')
                                    ->image()
                                    ->required(),

                                Forms\Components\FileUpload::make('thumbnail_dua')
                                    ->label('Thumbnail 2')
                                    ->image()
                                    ->required(),

                                Forms\Components\FileUpload::make('thumbnail_tiga')
                                    ->label('Thumbnail 3')
                                    ->image()
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Card::make('Link')
                            ->schema([
                                Forms\Components\TextInput::make('link_satu')
                                    ->label('Link Satu')
                                    ->required(),
                                Forms\Components\TextInput::make('link_dua')
                                    ->label('Link Dua')
                                    ->required(),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan('full'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\ImageColumn::make('logo')
                        ->height('10%')
                        ->width('10%'),
                    Tables\Columns\Layout\Stack::make([
                        Tables\Columns\TextColumn::make('nama_yayasan')
                            ->weight(FontWeight::Bold),
                        Tables\Columns\TextColumn::make('link_satu')
                            ->label('Nama')
                            ->formatStateUsing(fn (string $state): string => str($state)->after('://')->ltrim('www.')->trim('/'))
                            ->color('gray')
                            ->limit(30),
                        Tables\Columns\TextColumn::make('link_dua')
                            ->formatStateUsing(fn (string $state): string => str($state)->after('://')->ltrim('www.')->trim('/'))
                            ->color('gray')
                            ->limit(30),
                    ])->space(2),
                    Tables\Columns\Layout\Panel::make([
                        Tables\Columns\Layout\Split::make([
                            Tables\Columns\ImageColumn::make('benner'),
                            Tables\Columns\ImageColumn::make('thumbnail_satu'),
                            Tables\Columns\ImageColumn::make('thumbnail_dua'),
                            Tables\Columns\ImageColumn::make('thumbnail_tiga'),
                        ]),
                    ])->collapsible(),
                    Tables\Columns\Layout\Panel::make([
                        Tables\Columns\Layout\Split::make([
                            Tables\Columns\TextColumn::make('sejarah_yayasan')
                                ->color('gray'),
                        ]),
                    ])->collapsible(),
                    Tables\Columns\Layout\Panel::make([
                        Tables\Columns\Layout\Split::make([
                            Tables\Columns\TextColumn::make('deskripsi_yayasan')
                                ->color('gray'),
                        ]),
                    ])->collapsible(),
                ])
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
            'index' => Pages\ListYayasans::route('/'),
        ];
    }
}
