<?php

namespace App\Filament\Resources\EmailSubscriptions;

use App\Filament\Resources\EmailSubscriptions\Pages\CreateEmailSubscription;
use App\Filament\Resources\EmailSubscriptions\Pages\EditEmailSubscription;
use App\Filament\Resources\EmailSubscriptions\Pages\ListEmailSubscriptions;
use App\Filament\Resources\EmailSubscriptions\Schemas\EmailSubscriptionForm;
use App\Filament\Resources\EmailSubscriptions\Tables\EmailSubscriptionsTable;
use App\Models\EmailSubscription;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class EmailSubscriptionResource extends Resource
{
    protected static ?string $model = EmailSubscription::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'EmailSubscription';

    protected static string | UnitEnum | null $navigationGroup = 'Email Subscriptions';

    protected static ?int $navigationSort = 18;

    public static function form(Schema $schema): Schema
    {
        return EmailSubscriptionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmailSubscriptionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEmailSubscriptions::route('/'),
            // 'create' => CreateEmailSubscription::route('/create'),
            // 'edit' => EditEmailSubscription::route('/{record}/edit'),
        ];
    }
}
