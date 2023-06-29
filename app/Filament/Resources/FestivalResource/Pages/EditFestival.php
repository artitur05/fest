<?php

namespace App\Filament\Resources\FestivalResource\Pages;

use App\Filament\Resources\FestivalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFestival extends EditRecord
{
    protected static string $resource = FestivalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
