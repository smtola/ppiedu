<?php

namespace App\Filament\Resources\LibrarySubjectResource\Pages;

use App\Filament\Resources\LibrarySubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibrarySubject extends EditRecord
{
    protected static string $resource = LibrarySubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
} 