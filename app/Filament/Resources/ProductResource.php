<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages\EditProduct;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use App\Filament\Resources\ProductResource\Pages\ListProducts;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Checkbox;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\ProductCategory;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $slug = 'produk';
    protected static ?string $label = 'Produk';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('sku')->label('SKU')
                    ->required()
                    ->columnSpan(1),
                Select::make('product_category_id')->label('Kategori')
                    ->required()
                    ->options(ProductCategory::all()->pluck('title', 'id'))->columnSpan(1),
                TinyEditor::make('description')
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
                TextColumn::make('name')
                    ->label('Nama')
                    ->wrap()
                    ->description(fn(Product $record): string => strip_tags($record->sku))
                    ->lineClamp(2),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->html()
                    ->wrap()
                    ->words(20)
                    ->getStateUsing(fn($record) => strip_tags($record->description)),
                CheckboxColumn::make('is_published')->label('Dipublikasikan'),
                CheckboxColumn::make('is_featured')->label('Dipromosikan'),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('is_published')
                    ->label('Dipublikasikan')
                    ->options([
                        true => 'Dipublikasikan',
                        false => 'Tidak/Belum Dipublikasikan',
                    ]),
                SelectFilter::make('is_featured')
                    ->label('Dipromosikan')
                    ->options([
                        true => 'Dipromosikan',
                        false => 'Tidak/Belum Dipromosikan',
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
