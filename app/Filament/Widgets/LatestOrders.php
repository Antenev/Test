<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Shop\OrderResource;
use App\Models\Shop\Order;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Squire\Models\Currency;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function getDefaultTableRecordsPerPageSelectOption(): int
    {
        return 5;
    }

    protected function getDefaultTableSortColumn(): ?string
    {
        return 'created_at';
    }

    protected function getDefaultTableSortDirection(): ?string
    {
        return 'desc';
    }

    protected function getTableQuery(): Builder
    {
        return OrderResource::getEloquentQuery();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('created_at')
                ->label('Дата на поръчка')
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('number')
                ->label('Номер')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('customer.name')
                ->label('Клиент')
                ->searchable()
                ->sortable(),
            Tables\Columns\BadgeColumn::make('status')
                ->label('Състояние')
                ->colors([
                    'danger' => 'cancelled',
                    'warning' => 'processing',
                    'success' => fn ($state) => in_array($state, ['delivered', 'shipped']),
                ]),
            Tables\Columns\TextColumn::make('currency')
                ->label('Валута')
                ->getStateUsing(fn ($record): ?string => Currency::find($record->currency)?->name ?? null)
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('total_price')
                ->label('Обща цена')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('shipping_price')
                ->label('Цена за доставка')
                ->searchable()
                ->sortable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('open')
                ->url(fn (Order $record): string => OrderResource::getUrl('edit', ['record' => $record])),
        ];
    }
}
