<?php

namespace App\Filament\Resources\SuccessStories\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class SuccessStoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    SpatieMediaLibraryFileUpload::make('image')
                            ->collection('success_story_image')
                            ->disk('public_story')
                            ->image()
                            ->required(),
                ])->columnSpan(4),
                Grid::make(1)->schema([
                    Textarea::make('title')
                        ->required()
                        ->columnSpanFull(),
                    Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                    Builder::make('payload')
                        ->blocks([
                            Block::make('duration')
                                ->label('Durasi')
                                ->schema([
                                    TextArea::make('text')
                                        ->required(),
                                ])
                                ->maxItems(1),
                            Block::make('type_plant')
                                ->label('Jenis Tanaman')
                                ->schema([
                                    TextArea::make('text')
                                        ->required(),
                                ])
                                ->maxItems(1),
                            Block::make('manpower')
                                ->label('Jumlah Pekerja')
                                ->schema([
                                    TextArea::make('text')
                                        ->required(),
                                ])
                                ->maxItems(1),
                        ])
                        ->required()
                        ->columnSpanFull(),
                ])->columnSpan(8),
            ])->columns(12);
    }
}
