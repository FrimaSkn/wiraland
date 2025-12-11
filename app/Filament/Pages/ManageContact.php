<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Schemas\Schema;
use App\Settings\SettingContact;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms;

class ManageContact extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingContact::class;

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-contact.'.$file->getClientOriginalExtension()))
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
