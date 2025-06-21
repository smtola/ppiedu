<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Actions;
use App\Models\News;
use Filament\Resources\Pages\EditRecord;
   

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $this->record->update([
            'image_filenames' => $this->record->getMedia('images')->pluck('file_name')->toArray(),
        ]);
    }
}
