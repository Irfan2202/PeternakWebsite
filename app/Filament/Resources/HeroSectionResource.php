<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HeroSection;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HeroSectionResource\Pages;
use App\Filament\Resources\HeroSectionResource\RelationManagers;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required()
                    ->disk('public'),
                TextInput::make('image_alt')
                    ->label('Image Alt Text')
                    ->nullable(),
                TextInput::make('tagline')
                    ->label('Tagline')
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('description')
                    ->label('Description')
                    ->required(),
                TextInput::make('button_text')
                    ->label('Button Text')
                    ->required(),
                TextInput::make('button_link')
                    ->label('Button Link')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public'),
                TextColumn::make('image_alt')
                    ->label('Image Alt Text'),
                TextColumn::make('tagline')
                    ->label('Tagline'),
                TextColumn::make('title')
                    ->label('Title'),
                TextColumn::make('description')
                    ->label('Description'),
                TextColumn::make('button_text')
                    ->label('Button Text'),
                TextColumn::make('button_link')
                    ->label('Button Link')
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
            'index' => Pages\ListHeroSections::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }
}
