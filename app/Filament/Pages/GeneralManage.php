<?php

namespace App\Filament\Pages;

use BackedEnum;
use Livewire\Form;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\GeneralSetting;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\Builder\Block;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use UnitEnum;

class GeneralManage extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = GeneralSetting::class;

    protected static string | UnitEnum | null $navigationGroup = 'General Settings';

    protected static ?int $navigationSort = 20;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Fieldset::make('Banner')
                    ->schema([
                        Forms\Components\FileUpload::make('banner_faq')
                            ->label(__('Banner FAQ'))
                            ->disk('public_pages')
                            ->directory('banner')
                            ->image()
                            ->required()
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-faq.'.$file->getClientOriginalExtension()))
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('banner_testimonial')
                            ->label(__('Banner Testimonial'))
                            ->disk('public_pages')
                            ->directory('banner')
                            ->image()
                            ->required()
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-testimonial.'.$file->getClientOriginalExtension()))
                            ->columnSpanFull(),
                    ])->columnSpanFull(),
                Fieldset::make('Circular')
                    ->schema([
                        Repeater::make('circular')
                            ->label(__('Item'))
                            ->schema([
                                Forms\Components\FileUpload::make('icon')
                                    ->label(__('Icon'))
                                    ->image()
                                    ->disk('public_pages')
                                    ->directory('home/circular')
                                    ->required()
                                    ->maxSize(1024)
                                    ->acceptedFileTypes(['image/*']),
                                Forms\Components\TextInput::make('number')
                                    ->label(__('Number'))
                                    ->required(),
                                Forms\Components\TextInput::make('text')
                                    ->required(),
                        ])
                        ->columnSpanFull()
                        ->minItems(3)
                        ->maxItems(3),
                ])->columnSpanFull(),
                Fieldset::make('Section Direktur')
                    ->schema([
                        Repeater::make('director')
                            ->label(__('Content'))
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Grid::make(1)
                                            ->schema([
                                                Forms\Components\FileUpload::make('image')
                                                    ->label(__('Image'))
                                                    ->image()
                                                    ->disk('public_pages')
                                                    ->directory('home/director')
                                                    ->required()
                                                    ->maxSize(2048)
                                                    ->acceptedFileTypes(['image/*']),
                                                Forms\Components\TextInput::make('name')
                                                    ->label(__('Name'))
                                                    ->required(),
                                                Forms\Components\TextInput::make('position')
                                                    ->label(__('Position'))
                                                    ->required(),
                                            ]),
                                        Grid::make(1)
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label(__('Title'))
                                                    ->required(),
                                                Forms\Components\Textarea::make('tagline')
                                                    ->label(__('Tagline'))
                                                    ->required(),
                                                Forms\Components\RichEditor::make('message')
                                                    ->label(__('Message'))
                                                    ->required(),
                                            ]),
                                    ]),
                        ])
                        ->columnSpanFull()
                        ->deletable(false)
                        ->minItems(1)
                        ->maxItems(1),
                    ])->columnSpanFull(),
                Fieldset::make('Social Media')
                    ->schema([
                        Repeater::make('social_media')
                            ->label(__('Item'))
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label(__('Name'))
                                    ->required(),
                                Forms\Components\TextInput::make('link')
                                    ->label(__('Link'))
                                    ->url()
                                    ->required(),
                        ])
                        ->columnSpanFull()
                        ->minItems(1)
                        ->maxItems(4),
                    ])->columnSpanFull(),
            ]);
    }
}
