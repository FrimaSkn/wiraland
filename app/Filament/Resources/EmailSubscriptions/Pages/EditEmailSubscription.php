<?php

namespace App\Filament\Resources\EmailSubscriptions\Pages;

use App\Filament\Resources\EmailSubscriptions\EmailSubscriptionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEmailSubscription extends EditRecord
{
    protected static string $resource = EmailSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
