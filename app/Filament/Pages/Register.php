<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as BaseRegister;

class Register extends BaseRegister
{
    protected static string $view = 'filament.pages.register';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->placeholder('Please enter your full name')
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->placeholder('Please enter your email address')
                    ->unique(User::class, 'email')
                    ->maxLength(255),

                Forms\Components\TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->tel()
                    ->required()
                    ->placeholder('Please enter your phone number')
                    ->maxLength(20),

                Forms\Components\Textarea::make('address')
                    ->label('Address')
                    ->required()
                    ->placeholder('Please enter your address')
                    ->maxLength(255),

                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->required()
                    ->placeholder('Please enter your password')
                    ->minLength(8)
                    ->maxLength(255),

                Forms\Components\TextInput::make('password_confirmation')
                    ->label('Confirm Password')
                    ->password()
                    ->revealable()
                    ->required()
                    ->placeholder('Please confirm your password')
                    ->minLength(8)
                    ->maxLength(255),
            ]);
    }

    protected function createUser(array $data): User
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'], // simpan ke DB
            'password' => bcrypt($data['password']),

        ]);

        $user->assignRole('partner');

        return $user;
    }
}
