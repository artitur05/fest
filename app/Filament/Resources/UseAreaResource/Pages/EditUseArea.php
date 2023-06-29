<?php

namespace App\Filament\Resources\UseAreaResource\Pages;

use App\Filament\Resources\UseAreaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUseArea extends EditRecord
{
    protected static string $resource = UseAreaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
