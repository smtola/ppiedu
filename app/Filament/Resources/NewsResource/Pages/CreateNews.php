<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Actions;
use App\Models\News;  // <--- add this here
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
    protected function afterCreate(): void
    {
        $this->record->update([
            'image_filenames' => $this->record->getMedia('images')->pluck('file_name')->toArray(),
        ]);
    }
}
