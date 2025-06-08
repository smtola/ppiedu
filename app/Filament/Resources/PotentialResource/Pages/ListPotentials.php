<?php

namespace App\Filament\Resources\PotentialResource\Pages;

use App\Filament\Resources\PotentialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPotentials extends ListRecords
{
    protected static string $resource = PotentialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
