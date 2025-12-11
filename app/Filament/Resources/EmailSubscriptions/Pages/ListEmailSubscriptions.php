<?php

namespace App\Filament\Resources\EmailSubscriptions\Pages;

use App\Filament\Resources\EmailSubscriptions\EmailSubscriptionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEmailSubscriptions extends ListRecords
{
    protected static string $resource = EmailSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
