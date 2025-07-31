<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Package;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PackagesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackagesResource\RelationManagers;

class PackagesResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('name')
                    ->required(),

                TextInput::make('price')
                    ->label('price')
                    ->required(),
                Repeater::make('features')
                    ->relationship()
                    ->schema([
                        TextInput::make('name')
                            ->label('Feature')
                            ->required(),
                    ])
                    ->label('Fitur-fitur')
                    ->columns(1)
                    ->minItems(1)
                    ->createItemButtonLabel('Tambah Fitur'),

                TextInput::make('button_text')
                    ->label('button_text')
                    ->required(),
                TextInput::make('button_link')
                    ->label('button_link')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('name'),
                TextColumn::make('price')
                    ->label('price'),
                TextColumn::make('button_text')
                    ->label('button_text'),
                TextColumn::make('button_link')
                    ->label('button_link'),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackages::route('/create'),
            'edit' => Pages\EditPackages::route('/{record}/edit'),
        ];
    }
}
