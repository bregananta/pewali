<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Client;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ClientResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\ClientResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $slug = 'klien';
    protected static ?string $label = 'Klien';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama Klien')->required()->minLength(10)->columnSpan(2),
                RichEditor::make('description')->label('Deskripsi')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->columnSpan(3),
                TextInput::make('url')->label('Link (URL)')->required()->minLength(10)->columnSpan(3),
                SpatieMediaLibraryFileUpload::make('logo')
                    ->required()
                    ->image()
                    ->imageEditor()
                    ->responsiveImages()
                    ->label('Logo')
                    ->columnSpan(3),
                Hidden::make('user_id')->dehydrateStateUsing(fn ($state) => Auth::id())
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Klien')
                    ->wrap()
                    ->description(fn (Client $record): string => strip_tags($record->description))
                    ->lineClamp(2),
                SpatieMediaLibraryImageColumn::make('Gambar'),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
