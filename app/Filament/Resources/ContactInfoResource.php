<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ContactInfo;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactInfoResource\Pages;
use App\Filament\Resources\ContactInfoResource\RelationManagers;

class ContactInfoResource extends Resource
{
    protected static ?string $model = ContactInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('icon_class')
                    ->label('icon_class')
                    ->required(),
                TextInput::make('label')
                    ->label('label')
                    ->required(),
                TextInput::make('value')
                    ->label('value')
                    ->required(),
                TextInput::make('url')
                    ->label('url')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('icon_class')
                    ->label('icon_class'),
                TextColumn::make('label')
                    ->label('label'),
                TextColumn::make('value')
                    ->label('value'),
                TextColumn::make('url')
                    ->label('url')
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
            'index' => Pages\ListContactInfos::route('/'),
            'create' => Pages\CreateContactInfo::route('/create'),
            'edit' => Pages\EditContactInfo::route('/{record}/edit'),
        ];
    }
}
