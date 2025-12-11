<?php

namespace App\Filament\Resources\EmailSubscriptions\Pages;

use App\Filament\Resources\EmailSubscriptions\EmailSubscriptionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailSubscription extends CreateRecord
{
    protected static string $resource = EmailSubscriptionResource::class;
}
