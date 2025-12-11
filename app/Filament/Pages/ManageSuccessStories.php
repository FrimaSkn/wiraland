<?php

namespace App\Filament\Pages;

use BackedEnum;
use UnitEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use App\Settings\SettingSuccessStories;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageSuccessStories extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingSuccessStories::class;

    protected static string | UnitEnum | null $navigationGroup = 'Success Stories';

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-success-stories.'.$file->getClientOriginalExtension()))
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('grid_title')
                    ->label(__('Grid Title'))
                    ->required(),
                Forms\Components\Textarea::make('grid_desc')
                    ->label(__('Grid Description'))
                    ->required(),
            ]);
    }
}
