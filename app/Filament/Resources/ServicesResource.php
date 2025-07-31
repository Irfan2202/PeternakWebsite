<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Services;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServicesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServicesResource\RelationManagers;

class ServicesResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('icon_class')
                    ->label('Icon Class')
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('description')
                    ->label('Description')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('icon_class')
                    ->label('Icon Class'),
                TextColumn::make('title')
                    ->label('Title'),
                TextColumn::make('description')
                    ->label('Description'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateServices::route('/create'),
            'edit' => Pages\EditServices::route('/{record}/edit'),
        ];
    }
}
