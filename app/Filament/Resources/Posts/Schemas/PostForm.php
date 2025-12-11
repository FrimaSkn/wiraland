<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    Textarea::make('excerpt')
                        ->label('Excerpt')
                        ->maxLength(200)
                        ->required(),
                    RichEditor::make('content')
                        ->label('Content')
                        ->fileAttachmentsAcceptedFileTypes(['image/png', 'image/jpeg'])
                        ->required(),
                ])->columnSpan(8),
                Grid::make(1)->schema([
                    Section::make()->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('article_image')
                            ->image()
                            ->required(),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'archived' => 'archived',
                            ])
                            ->required(),
                    ])
                ])->columnSpan(4),
            ])->columns(12);
    }
}
