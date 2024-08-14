<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $slug = 'beranda';
    protected static ?string $label = 'Beranda';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->label('Tipe')
                    ->reactive()
                    ->options([
                        'hero' => 'Hero',
                        'block' => 'Block',
                        'product_knowledge' => 'Product Knowledge',
                        'ceo_remark' => 'CEO\'s Remark'
                    ])
                    ->required()
                    ->native(false)->columnSpan(1),
                TextInput::make('title')->label('Judul')->required()->minLength(10)->columnSpan(3),
                RichEditor::make('body')->label('Konten')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->columnSpan(3),
                Select::make('page_id')->label('Halaman Terhubung')
                    ->options(Page::all()->pluck('title', 'id'))->columnSpan(2),
                Checkbox::make('is_published')->label('Dipublikasikan')->columnSpan(3),
                SpatieMediaLibraryFileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->multiple()
                    ->responsiveImages()
                    ->label('Gambar')
                    ->hidden(fn(Get $get) => $get('type') === 'product_knowledge')
                    ->columnSpan(3),
                SpatieMediaLibraryFileUpload::make('image_2')
                    ->collection('hover-icon')
                    ->imageEditor()
                    ->multiple()
                    ->responsiveImages()
                    ->label('Gambar (2)')
                    ->hidden(fn(Get $get) => $get('type') !== 'product_knowledge')
                    ->columnSpan(3),
                Hidden::make('user_id')->dehydrateStateUsing(fn($state) => Auth::id())
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->getStateUsing(function (Home $record): string {
                        switch ($record->type) {
                            case 'hero':
                                return 'Hero';
                                break;
                            case 'block':
                                return 'Block';
                                break;
                            case 'product_knowledge':
                                return 'Product Knowledge';
                                break;
                            case 'ceo_remark':
                                return 'CEO\'s Remark';
                                break;
                            default:
                                return '--none--';
                        }
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'Hero' => 'info',
                        'Block' => 'warning',
                        'Product Knowledge' => 'success',
                        'CEO\'s Remark' => 'danger',
                        '--none--' => 'gray',
                    }),
                TextColumn::make('title')->label('Judul')->wrap()->lineClamp(2),
                TextColumn::make('body')->label('Konten')->html()->wrap()->lineClamp(2),
                SpatieMediaLibraryImageColumn::make('Gambar'),
                CheckboxColumn::make('is_published')
            ])
            ->filters([
                TrashedFilter::make()
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
