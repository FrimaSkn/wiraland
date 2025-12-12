<?php

namespace App\Filament\Pages;

use BackedEnum;
use UnitEnum;
use Livewire\Form;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingHome;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Fieldset;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageHome extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string | UnitEnum | null $navigationGroup = 'Home';

    protected static string $settings = SettingHome::class;

    protected static ?int $navigationSort = 1;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Fieldset::make('Hero Section')
                    ->schema([
                        Repeater::make('banner')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label(__('Image'))
                                    ->image()
                                    ->disk('public_pages')
                                    ->directory('home/banner')
                                    ->required()
                                    ->maxSize(1024)
                                    ->acceptedFileTypes(['image/*']),
                        ])->columnSpanFull(),
                    ])->columnSpanFull(),
                Fieldset::make('Section One')
                    ->schema([
                        Forms\Components\TextInput::make('section_one_title')
                            ->label(__('Title'))
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('section_one_desc')
                            ->label(__('Description'))
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('section_one_video')
                            ->label(__('Video'))
                            ->disk('public_pages')
                            ->directory('home/section_one')
                            ->required()
                            ->maxSize(51200)
                            ->acceptedFileTypes(['video/*'])
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('home-video.'.$file->getClientOriginalExtension()))
                            ->columnSpanFull(),
                    ])->columnSpanFull(),
                Fieldset::make('Section Service')
                    ->schema([
                        Repeater::make('services')
                            ->schema([
                                Forms\Components\TextInput::make('text')
                                    ->label(__('Text'))
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->label(__('Image'))
                                    ->image()
                                    ->disk('public_pages')
                                    ->directory('home/section_service')
                                    ->required()
                                    ->maxSize(1024)
                                    ->acceptedFileTypes(['image/*']),
                        ])
                        ->columnSpanFull()
                        ->minItems(3)
                        ->maxItems(3),
                    ])->columnSpanFull(),

                Fieldset::make('Section Image')
                    ->schema([
                        Repeater::make('section_image')
                            ->schema([
                                Forms\Components\FileUpload::make('bg_image')
                                    ->label(__('Image'))
                                    ->image()
                                    ->disk('public_pages')
                                    ->directory('home/section_image')
                                    ->required()
                                    ->maxSize(1024)
                                    ->acceptedFileTypes(['image/*'])
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('title')
                                    ->label(__('Title'))
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                            ->minItems(1)
                            ->maxItems(1)
                            ->columnSpanFull()
                    ])->columnSpanFull(),
            ]);
    }
}
