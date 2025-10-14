<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_customer')
                    ->relationship('customer', 'username')
                    ->required(),
                Forms\Components\Select::make('id_partner')
                    ->relationship('partner', 'name')
                    ->required(),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('finish_date')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                        'completed' => 'Completed',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('total_price')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('payment_method')
                    ->maxLength(50)
                    ->required(),
                Forms\Components\TextInput::make('payment_gateway_ref')
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_order')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('customer.username')->label('Customer')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('partner.name')->label('Partner')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('start_date')->date()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('finish_date')->date()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_price')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('payment_method')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('payment_gateway_ref')->label('Gateway Ref')->limit(50)->sortable()->searchable(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
