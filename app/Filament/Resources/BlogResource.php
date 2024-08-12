<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\BlogResource\Pages;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogResource\RelationManagers;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Konten';

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
                    ->live(onBlur: true)
                    ->columnSpan(2),
                Hidden::make('is_slug_changed_manually')
                    ->default(false)
                    ->dehydrated(false),
                TextInput::make('slug')->label('Slug')->required()->unique(ignoreRecord: true)->columnSpan(2),
                // RichEditor::make('content')->label('Konten')->required()->columnSpan(3),
                TinyEditor::make('content')
                    ->label('Konten')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('default|simple|full|minimal|none|custom')
                    ->columnSpan('full')
                    ->required()
                    ->columnSpan(3),
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
                Hidden::make('user_id')->dehydrateStateUsing(fn($state) => Auth::id())

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->wrap()
                    ->description(fn(Blog $record): string => $record->slug)
                    ->lineClamp(2),
                SpatieMediaLibraryImageColumn::make('Gambar'),
                // TextColumn::make('content')->label('Konten')->html()->wrap()->lineClamp(2),
                TextColumn::make('content')
                    ->html()
                    ->wrap()
                    // ->lineClamp(2)
                    ->words(20)
                    ->getStateUsing(function (Blog $record): string {
                        // return preg_replace('/<img(.*)<\/img>/iUs', '', preg_replace('/<figure(.*)<\/figure>/iUs', '', $record->content));
                        return preg_replace('/<img[^>]+\>/i', '', $record->content);
                    }),
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
