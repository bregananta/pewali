<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Closure;
use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Columns\CheckboxColumn;
use phpDocumentor\Reflection\Types\Boolean;
use App\Filament\Resources\PageResource\Pages;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $slug = 'halaman';
    protected static ?string $label = 'Halaman';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul')
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                        if (!$get('is_slug_changed_manually') && filled($state)) {
                            $set('slug', Str::slug($state));
                        }
                    })
                    ->reactive()
                    ->required()
                    ->columnSpan(2),
                Hidden::make('is_slug_changed_manually')
                    ->default(false)
                    ->dehydrated(false),
                TextInput::make('slug')->label('Slug')->required()->unique(ignoreRecord: true)->columnSpan(2),
                // RichEditor::make('content')->label('Konten')->required()->columnSpan(3),
                TinyEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('default|simple|full|minimal|none|custom')
                    ->columnSpan('full')
                    ->required(),
                TextInput::make('meta')->label('Meta Data')->required()->columnSpan(3),
                // Checkbox::make('is_menu')
                //     ->label('Sebagai Menu')
                //     ->reactive()
                //     ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                //         if ($get('is_menu') === false) {
                //             $set('menu_text', null);
                //             $set('parent_id', null);
                //         }
                //     })
                //     ->columnSpan(3),
                // Select::make('parent_id')
                //     ->options(Page::where('is_menu', true)->pluck('title', 'id'))
                //     ->label('Sub Menu Dari')
                //     ->columnSpan(1),
                // TextInput::make('menu_text')
                //     ->label('Teks Menu')
                //     ->required(fn (Get $get) => $get('is_menu'))
                //     ->columnSpan(1),
                Checkbox::make('is_published')->label('Dipublikasikan')->columnSpan(3),
                Hidden::make('user_id')->dehydrateStateUsing(fn ($state) => Auth::id())
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->wrap()
                    ->description(fn (Page $record): string => $record->slug)
                    ->lineClamp(2),
                TextColumn::make('content')
                    ->html()
                    ->wrap()
                    // ->lineClamp(2)
                    ->words(20)
                    ->getStateUsing(function (Page $record): string {
                        return preg_replace('/<figure(.*)<\/figure>/iUs', '', $record->content);
                    }),
                CheckboxColumn::make('is_published'),
                // IconColumn::make('is_menu')->boolean(),
                TextColumn::make('menu_text')
            ])
            ->filters([
                TrashedFilter::make(),
                // SelectFilter::make('is_menu')
                //     ->label('Sebagai Menu')
                //     ->options([
                //         true => 'Sebagai Menu',
                //         false => 'Bukan Sebagai Menu',
                //     ]),
                SelectFilter::make('is_published')
                    ->label('Dipublikasikan')
                    ->options([
                        true => 'Dipublikasikan',
                        false => 'Tidak/Belum Dipublikasikan',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
