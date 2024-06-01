<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?int $navigationSort = 3;

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
                RichEditor::make('content')->label('Konten')->required()->columnSpan(3),
                TextInput::make('meta')->label('Meta Data')->required()->columnSpan(3),
                Checkbox::make('is_published')->label('Dipublikasikan')->columnSpan(1),
                Checkbox::make('is_featured')->label('Dipromosikan')->columnSpan(1),
                SpatieMediaLibraryFileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->multiple()
                    ->responsiveImages()
                    ->label('Gambar')
                    ->columnSpan(3),
                Hidden::make('user_id')->dehydrateStateUsing(fn ($state) => Auth::id())

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->wrap()
                    ->description(fn (Blog $record): string => $record->slug)
                    ->lineClamp(2),
                SpatieMediaLibraryImageColumn::make('Gambar'),
                TextColumn::make('content')->label('Konten')->html()->wrap()->lineClamp(2),
                CheckboxColumn::make('is_published')->label('Dipublikasikan'),
                CheckboxColumn::make('is_featured')->label('Dipromosikan'),
            ])
            ->filters([
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
