<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Upgrade;
use Filament\Forms\Form;
use App\Models\MyHideout;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MyHideoutResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MyHideoutResource\RelationManagers;

class MyHideoutResource extends Resource
{
    protected static ?string $model = Upgrade::class;

    protected static ?string $navigationLabel = 'My Hideout';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('module_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('level')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('construction_time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_constructed')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('level')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('construction_time')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_constructed'),
            ])
            ->groups([
                Tables\Grouping\Group::make('module.name')
                    ->collapsible()
            ])
            ->defaultGroup('module.name')
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
            'index' => Pages\ListMyHideouts::route('/'),
            'create' => Pages\CreateMyHideout::route('/create'),
            'edit' => Pages\EditMyHideout::route('/{record}/edit'),
        ];
    }
}
