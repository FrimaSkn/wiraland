<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Pages\SettingsPage;
use App\Settings\SettingPortfolio;
use Filament\Support\Icons\Heroicon;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use UnitEnum;

class ManagePortfolio extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingPortfolio::class;

    protected static string | UnitEnum | null $navigationGroup = 'Portfolio';

    protected static ?int $navigationSort = 7;

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-portfolio.'.$file->getClientOriginalExtension()))
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
