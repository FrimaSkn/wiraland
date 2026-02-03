<?php

namespace App\Filament\Pages;

use UnitEnum;
use BackedEnum;
use Filament\Forms;
use Filament\Schemas\Schema;
use App\Settings\SettingProduct;
use Filament\Pages\SettingsPage;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Fieldset;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageProduct extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SettingProduct::class;

    protected static string | UnitEnum | null $navigationGroup = 'Product';

    protected static ?int $navigationSort = 5;

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
                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('banner-product.'.$file->getClientOriginalExtension()))
                    ->columnSpanFull(),

                Fieldset::make('Product Catalogue')
                    ->schema([
                        Forms\Components\FileUpload::make('thumb_catalogue')
                            ->label(__('Thumbnail Catalogue'))
                            ->disk('public_pages')
                            ->directory('product')
                            ->image()
                            ->maxSize(1024)
                            ->required()
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('thumb-catalogue.'.$file->getClientOriginalExtension())),
                        Forms\Components\FileUpload::make('product_catalogue')
                            ->label(__('Product Catalogue'))
                            ->disk('public_pages')
                            ->directory('product')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240)
                            ->required()
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str('product-catalogue.'.$file->getClientOriginalExtension())),
                    ])
                    ->columnSpanFull(),

                Fieldset::make('E-Commerce')
                    ->schema([
                        // repeatable e-commerce links
                        Forms\Components\Repeater::make('ecommerce')
                            ->label(__('E-Commerce Links'))
                            ->schema([
                                // icon upload
                                Forms\Components\FileUpload::make('icon')
                                    ->label(__('Icon'))
                                    ->disk('public_pages')
                                    ->directory('product/ecommerce')
                                    ->image()
                                    ->maxSize(1024)
                                    ->required(),
                                Forms\Components\TextInput::make('name')
                                    ->label(__('Name'))
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label(__('URL'))
                                    ->required()
                                    ->url(),
                            ])
                            ->columnSpanFull()
                            ->minItems(1)
                            ->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
