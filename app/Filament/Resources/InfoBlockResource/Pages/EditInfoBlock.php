<?php

namespace App\Filament\Resources\InfoBlockResource\Pages;

use App\Filament\Resources\InfoBlockResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfoBlock extends EditRecord
{
    protected static string $resource = InfoBlockResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
