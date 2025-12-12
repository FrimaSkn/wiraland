<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingArticle;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use UnitEnum;

class ManageArticle extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingArticle::class;

    protected static string | UnitEnum | null $navigationGroup = 'Articles';

    protected static ?int $navigationSort = 9;

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-article.'.$file->getClientOriginalExtension()))
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
