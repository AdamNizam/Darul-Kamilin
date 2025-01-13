<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Tunggakan;
use App\Models\Pembayaran;
use Filament\Tables\Table;
use App\Models\Pemabayaran;
use Doctrine\DBAL\Schema\Schema;
use Filament\Resources\Resource;
use App\Models\KategoriTunggakan;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PemabayaranResource\Pages;
use App\Filament\Resources\PemabayaranResource\RelationManagers;

class PemabayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $navigationLabel = 'Pembayaran';

    protected static ?string $navigationIcon = 'heroicon-m-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Wizard::make([

            Forms\Components\Wizard\Step::make('Bayar Tunggakan Santri')
            ->schema([
                Select::make('tunggakan_santri_id')
                ->label('Pilih Santri')
                ->relationship('tunggakanSantri', 'bulan', function ($query) {
                    return $query->with('santri');
                    })
                ->getOptionLabelFromRecordUsing(fn ($record) => $record->bulan . ' - ' . $record->santri->nama. ' - ' . $record->kategoriTunggakan->nama)
                ->required(),

                Select::make('bulan')
                ->label('Bulan')
                ->prefix('Bulan Ke -')
                ->options([
                    'january' => 'January',
                    'february' => 'February',
                    'march' => 'March',
                    'april' => 'April',
                    'may' => 'May',
                    'june' => 'June',
                    'july' => 'July',
                    'august' => 'August',
                    'september' => 'September',
                    'october' => 'October',
                    'november' => 'November',
                    'december' => 'December',
                ])
                ->required(),

                TextInput::make('nama')
                ->label('Catatan')
                ->required()

            ]),

            Forms\Components\Wizard\Step::make('Data Pembayaran')
            ->schema([
                Forms\Components\DateTimePicker::make('tanggal_pembayaran')
                ->label('Tanggal Pembayaran')
                ->required(),
                    Select::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->options([
                    'cash' => 'Cash',
                    'transfer' => 'Transfer',
                    'credit_card' => 'Credit Card',
                ])
                ->required(),
            ]),
            Forms\Components\Wizard\Step::make('Verifikasi Pembayaran')
            ->schema([
                Forms\Components\FileUpload::make('bukti_pembayaran')
                ->label('Bukti Pembayaran'),
            ]),
            ])
            ->columnSpan('full'),
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                ->label('Tanggal')
                ->dateTime('d F Y H:i'),

                Tables\Columns\TextColumn::make('metode_pembayaran')
                    ->label('Metode'),

                Tables\Columns\TextColumn::make('bulan')
                    ->label('Bulan ->')
                    ->color('danger'),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Dibayar Oleh ->')
                    ->color('gray'),

                Tables\Columns\TextColumn::make('tunggakanSantri.santri.nama')
                ->label('Nama Santri')
                ->color('warning'),

                ImageColumn::make('bukti_pembayaran')
                ->label('Bukti Pembayaran'),

                Tables\Columns\TextColumn::make('tunggakanSantri.kategoriTunggakan.jumlah')
                ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                ->prefix('Rp ')
                ->label('Jumlah Bayar'),

                BadgeColumn::make('status')
                ->label('Status')
                ->colors([
                    'warning' => fn ($state): bool => $state === 0, // Proses
                    'success' => fn ($state): bool => $state === 1, // Berhasil
                    'danger' => fn ($state): bool => $state === 2, // Gagal
                ])
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        0 => '<span class="flex items-center gap-2"><x-filament::icon name="heroicon-o-clock" class="w-5 h-5 text-yellow-600" /> Proses</span>',
                        1 => '<span class="flex items-center gap-2"><x-filament::icon name="heroicon-o-check-circle" class="w-5 h-5 text-green-600" /> Berhasil</span>',
                        2 => '<span class="flex items-center gap-2"><x-filament::icon name="heroicon-o-x-circle" class="w-5 h-5 text-red-600" /> Gagal</span>',
                        default => 'Tidak Diketahui',
                    };
                })
                ->extraAttributes(['class' => 'text-sm font-medium'])
                ->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('confirm')
                    ->label('Confirm')
                    ->color('warning')
                    ->action(function (Pembayaran $record, array $data): void {
                        $record->update(['status' => $data['status']]);
                    })
                    ->form([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                1 => 'Berhasil',
                                2 => 'Gagal',
                            ])
                            ->required(),
                    ])
                    ->modalHeading('Confirm Pembayaran')
                    ->modalButton('Update Status')
                    ->modalWidth('md'),
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
            'index' => Pages\ListPemabayarans::route('/'),
        ];
    }
}
