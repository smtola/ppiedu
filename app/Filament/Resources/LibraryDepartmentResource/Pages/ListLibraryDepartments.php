<?php

namespace App\Filament\Resources\LibraryDepartmentResource\Pages;

use App\Filament\Resources\LibraryDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibraryDepartments extends ListRecords
{
    protected static string $resource = LibraryDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
