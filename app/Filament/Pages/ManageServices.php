<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingService;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Fieldset;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use UnitEnum;

class ManageServices extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingService::class;

    protected static string | UnitEnum | null $navigationGroup = 'Services';

    protected static ?int $navigationSort = 4;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\FileUpload::make('banner')
                    ->label(__('Banner'))
                    ->disk('public_pages')
                    ->directory('banner')
                    ->image()
                    ->required()
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-services.'.$file->getClientOriginalExtension()))
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('grid_title')
                    ->label(__('Grid Title'))
                    ->required(),
                Forms\Components\Textarea::make('grid_desc')
                    ->label(__('Grid Description'))
                    ->required(),
                Forms\Components\Repeater::make('services')
                    ->schema([
                        Grid::make(1)->schema([
                            Forms\Components\FileUpload::make('image')
                                ->label(__('Image'))
                                ->disk('public_pages')
                                ->directory('services')
                                ->image()
                                ->required()
                        ]),
                        Grid::make(1)->schema([
                            Forms\Components\FileUpload::make('icon')
                                ->label(__('Icon'))
                                ->disk('public_pages')
                                ->directory('services')
                                ->image()
                                ->required(),
                            Forms\Components\TextInput::make('title')
                                ->label(__('Title'))
                                ->required(),
                            Forms\Components\Textarea::make('desc')
                                ->label(__('Description'))
                                ->required(),
                        ])
                    ])->columns(2)->columnSpanFull(),
                Fieldset::make('Section Two')
                    ->schema([
                        Forms\Components\Textarea::make('section_two_title')
                            ->label(__('Title'))
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Repeater::make('section_two')
                            ->schema([
                                Grid::make(1)->schema([
                                    Forms\Components\FileUpload::make('icon')
                                        ->label(__('Icon'))
                                        ->disk('public_pages')
                                        ->directory('services')
                                        ->image()
                                        ->required(),
                                ])->columnSpan(1),
                                Grid::make(1)->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->label(__('Title'))
                                        ->required(),
                                    Forms\Components\Textarea::make('desc')
                                        ->label(__('Description'))
                                        ->required(),
                                ])->columnSpan(2)
                        ])
                        ->minItems(3)
                        ->maxItems(3)
                        ->columns(3)
                        ->columnSpanFull(),
                    ])->columnSpanFull(),
            ]);
    }
}
