<?php

namespace App\Filament\Resources\LibraryCategoryResource\Pages;

use App\Filament\Resources\LibraryCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibraryCategory extends EditRecord
{
    protected static string $resource = LibraryCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
} 