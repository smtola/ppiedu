<?php

namespace App\Filament\Resources\PotentialResource\Pages;

use App\Filament\Resources\PotentialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPotential extends EditRecord
{
    protected static string $resource = PotentialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
