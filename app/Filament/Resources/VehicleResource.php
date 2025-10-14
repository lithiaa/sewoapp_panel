<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vehicle_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('id_partner')
                    ->relationship('partner', 'name')
                    ->required(),
                Forms\Components\Select::make('id_category')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('vehicle_year')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('license_plate')
                    ->required()
                    ->maxLength(20),
                Forms\Components\Textarea::make('desc')
                    ->maxLength(1000),
                Forms\Components\Select::make('status')
                    ->options([
                        'booked' => 'Booked',
                        'available' => 'Available',
                        'maintenance' => 'Maintenance',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('image_url')
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_vehicle')->label('ID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('vehicle_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('partner.name')->label('Partner')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('category.name')->label('Category')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('vehicle_year')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('license_plate')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('image_url')->label('Image URL')->limit(50)->sortable()->searchable(),
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }
}
