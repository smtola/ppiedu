<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibrarySubjectResource\Pages;
use App\Models\LibrarySubject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class LibrarySubjectResource extends Resource
{
    protected static ?string $model = LibrarySubject::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Library Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => 
                        $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\Select::make('library_department_id')
                    ->relationship('department', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('attachment')
                    ->directory('library-subject-attachments')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf', 'image/*', 'video/*'])
                    ->maxSize(10240),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('department.category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('link')
                    ->label('External Link')
                    ->searchable(),
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('department-images')
                    ->conversion('thumb')
                    ->width(50)
                    ->height(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('department')
                    ->relationship('department', 'name'),
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('department.category', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('viewLink')
                    ->label('View Link')
                    ->icon('heroicon-o-link')
                    ->visible(fn ($record) => $record->link)
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('viewAttachment')
                    ->label('View Attachment')
                    ->icon('heroicon-o-document')
                    ->visible(fn ($record) => $record->attachment)
                    ->url(fn ($record) => Storage::url($record->attachment))
                    ->openUrlInNewTab(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLibrarySubjects::route('/'),
            'create' => Pages\CreateLibrarySubject::route('/create'),
            'edit' => Pages\EditLibrarySubject::route('/{record}/edit'),
        ];
    }
} 