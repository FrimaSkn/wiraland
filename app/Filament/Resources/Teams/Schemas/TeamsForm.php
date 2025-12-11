<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class TeamsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('picture')
                    ->collection('team_picture')
                    ->image()
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('role')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
