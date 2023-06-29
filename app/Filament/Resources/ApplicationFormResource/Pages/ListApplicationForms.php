<?php

namespace App\Filament\Resources\ApplicationFormResource\Pages;

use App\Filament\Resources\ApplicationFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApplicationForms extends ListRecords
{
    protected static string $resource = ApplicationFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
