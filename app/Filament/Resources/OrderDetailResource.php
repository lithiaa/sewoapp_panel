<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderDetailResource\Pages;
use App\Filament\Resources\OrderDetailResource\RelationManagers;
use App\Models\OrderDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderDetailResource extends Resource
{
    protected static ?string $model = OrderDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_order')
                    ->relationship('order', 'id_order')
                    ->required(),
                Forms\Components\Select::make('id_vehicle')
                    ->relationship('vehicle', 'vehicle_name')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('total_days')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('totalprice')
                    ->numeric(),
                Forms\Components\TextInput::make('total_price')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_order_detail')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order.id_order')->label('Order')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('vehicle.vehicle_name')->label('Vehicle')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_days')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_price')->sortable()->searchable(),
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
            'index' => Pages\ListOrderDetails::route('/'),
            'create' => Pages\CreateOrderDetail::route('/create'),
            'edit' => Pages\EditOrderDetail::route('/{record}/edit'),
        ];
    }
}
