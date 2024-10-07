<?php

namespace App\Filament\Resources\Employer\Event\EventResource\Pages;

use App\Filament\Resources\Employer\Event\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
