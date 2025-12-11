<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                        ->label('Category Name')
                        ->required(),
                    ])
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('portfolio_image')
                    ->label('Image')
                    ->disk('public_portfolios')
                    ->directory('portfolios/images')
                    ->required()
                    ->maxSize(5120)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                ]);
    }
}
