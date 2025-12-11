<?php

namespace App\Filament\Pages;

use BackedEnum;
use UnitEnum;
use Livewire\Form;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingAbout;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Builder\Block;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageAbout extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingAbout::class;

    protected static string | UnitEnum | null $navigationGroup = 'About';


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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-about.'.$file->getClientOriginalExtension()))
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('grid_title')
                    ->label(__('Grid Title'))
                    ->required(),
                Forms\Components\Textarea::make('grid_desc')
                    ->label(__('Grid Description'))
                    ->required(),
                Forms\Components\Builder::make('vision_mission')
                    ->blocks([
                        Block::make('mission')
                            ->schema([
                                Forms\Components\FileUpload::make('image_misi')
                                    ->label(__('Misi Image'))
                                    ->disk('public_pages')
                                    ->directory('about')
                                    ->image()
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('image-misi.'.$file->getClientOriginalExtension()))
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('description')
                                    ->label(__('Description'))
                                    ->required(),
                            ])->maxItems(1),
                        Block::make('vision')
                            ->schema([
                                Forms\Components\FileUpload::make('image_visi')
                                    ->label(__('Visi Image'))
                                    ->disk('public_pages')
                                    ->directory('about')
                                    ->image()
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('image-visi.'.$file->getClientOriginalExtension()))
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('description')
                                    ->label(__('Description'))
                                    ->required(),
                            ])->maxItems(1),
                    ])->columnSpanFull(),
                Forms\Components\Repeater::make('journey')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label(__('Image'))
                            ->disk('public_pages')
                            ->directory('about/journey')
                            ->image()
                            ->required()
                            ->maxSize(1024)
                            ->acceptedFileTypes(['image/*']),
                        Forms\Components\TextInput::make('year')->required(),
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\RichEditor::make('description')
                            ->label(__('Description'))
                            ->required()
                    ])->columnSpanFull()
            ]);
    }
}
