<?php

namespace App\Filament\Pages;

use BackedEnum;
use UnitEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingClients;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageClients extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingClients::class;

    protected static string | UnitEnum | null $navigationGroup = 'Clients';

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-clients.'.$file->getClientOriginalExtension()))
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title')
                    ->label(__('Title'))
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('desc')
                    ->label(__('Description'))
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
