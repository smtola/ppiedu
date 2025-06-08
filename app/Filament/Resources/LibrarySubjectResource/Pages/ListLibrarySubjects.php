<?php

namespace App\Filament\Resources\LibrarySubjectResource\Pages;

use App\Filament\Resources\LibrarySubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibrarySubjects extends ListRecords
{
    protected static string $resource = LibrarySubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
} 