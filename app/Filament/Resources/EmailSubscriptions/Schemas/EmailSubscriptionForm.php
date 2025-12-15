<?php

namespace App\Filament\Resources\EmailSubscriptions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class EmailSubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                ->columnSpanFull()
            ]);
    }
}
