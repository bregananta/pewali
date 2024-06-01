<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\Hidden;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->label('Tipe')
                    ->reactive()
                    ->options([
                        'group' => 'Pengelompokan Menu',
                        'url' => 'Tautan Eksternal',
                        'page' => 'Halaman Internal',
                    ])
                    ->required()
                    ->native(false)
                    ->columnSpan(1),
                TextInput::make('name')
                    ->label('Nama Menu')
                    ->required()
                    ->minLength(3)
                    ->columnSpan(2),
                Select::make('parent_id')->label('Sub-Menu dari')
                    ->options(Menu::all()->pluck('name', 'id'))
                    ->columnSpan(1),
                TextInput::make('url')
                    ->label('URL')
                    ->required()
                    ->minLength(10)
                    ->hidden(fn (Get $get) => $get('type') !== 'url')
                    ->columnSpan(2),
                Select::make('page_id')->label('Halaman Terhubung')
                    ->options(Page::all()->pluck('title', 'id'))
                    ->hidden(fn (Get $get) => $get('type') !== 'page')
                    ->columnSpan(2),
                Checkbox::make('is_blank')->label('Tampilkan pada window baru')->columnSpan(3),
                Hidden::make('user_id')->dehydrateStateUsing(fn ($state) => Auth::id())
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('parent_id', 'id')
            ->columns([
                TextColumn::make('name')->label('Nama Menu'),
                TextColumn::make('url')->label('URL Eksternal'),
                TextColumn::make('page.title')->label('Halaman Internal')
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
