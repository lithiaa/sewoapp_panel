<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Customer Information')->schema([
                    TextInput::make('username')
                        ->unique()
                        ->required()
                        ->maxLength(255),
                    TextInput::make('fullname')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->email()
                        ->unique()
                        ->required()
                        ->maxLength(255),
                    TextInput::make('phone_number')
                        ->numeric()
                        ->unique()
                        ->maxLength(20),
                    TextInput::make('address')
                        ->textarea()
                        ->maxLength(255),
                    TextInput::make('password')
                        ->password()
                        ->required()
                        ->minLength(8)
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_customer')->label('ID')->sortable()->searchable(),
                TextColumn::make('username')->sortable()->searchable(),
                TextColumn::make('fullname')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone_number')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
