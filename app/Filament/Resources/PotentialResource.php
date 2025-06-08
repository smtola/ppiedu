<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PotentialResource\Pages;
use App\Filament\Resources\PotentialResource\RelationManagers;
use App\Models\Potential;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
class PotentialResource extends Resource
{
    protected static ?string $model = Potential::class;

    protected static ?string $navigationIcon = 'heroicon-c-megaphone';
        protected static ?string $navigationGroup = 'Page Configure';

    public static function form(Form $form): Form
    {
        return $form
         ->schema([
                SpatieMediaLibraryFileUpload::make('images')
                    ->label(_('Icon'))
                    ->image()
                    ->openable()
                    ->collection('images')
                    ->reorderable()
                    ->appendFiles()
                    ->preserveFilenames()
                    ->columnSpan(1),
                    
                Forms\Components\TextInput::make('name')
                    ->label(_('Content'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
             ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('images')
                    ->conversion('thumb')
                    ->width(50)
                    ->height(50),
                    
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPotentials::route('/'),
            'create' => Pages\CreatePotential::route('/create'),
            'edit' => Pages\EditPotential::route('/{record}/edit'),
        ];
    }
}
