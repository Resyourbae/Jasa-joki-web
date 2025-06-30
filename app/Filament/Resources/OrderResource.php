<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Pesanan';
    protected static ?int $navigationSort = 2;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // ...existing code...
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                // ...existing code...
                TextColumn::make('user.name')
                    ->label('User')
                    ->default('-'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'pending' => 'warning',
                        'proses' => 'info',
                        'selesai' => 'success',
                        default => 'secondary',
                    }),
                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
                // ...existing code...
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ]),
            ])
            ->actions([
                // ...existing code...
                Action::make('ubahStatus')
                    ->label('Ubah Status')
                    ->action(function ($record) {
                        if ($record->status === 'pending') {
                            $record->status = 'proses';
                        } elseif ($record->status === 'proses') {
                            $record->status = 'selesai';
                        }
                        $record->save();
                    }),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // ...existing code...
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
