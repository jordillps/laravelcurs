<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Pages\ViewProduct;
use App\Filament\Resources\Products\RelationManagers\TagsRelationManager;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Schemas\ProductInfolist;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Product;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Bookmark;

     //Añafir atributo para la búsqueda
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Productos';

    protected static ?string $modelLabel = 'Producto';

    protected static ?string $pluralModelLabel = 'Productos';

    // Ordre als items de la barra de navegación
    protected static ?int $navigationSort = 1;

    //agrupar els items del la barra de navegació
    protected static UnitEnum|string|null $navigationGroup = 'Gestión de Ventas';

    // Badge con el número de productos
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    public static function form(Schema $schema): Schema
    {
        return ProductForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            TagsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'view' => ViewProduct::route('/{record}'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }

    //Va a la página de edición del producto al hacer clic en el resultado de la búsqueda global
    public static function getGlobalSearchResultUrl(Model $record): string
    {
        return ProductResource::getUrl('edit', ['record' => $record]);
    }

    //Atributos que se van a buscar en la búsqueda global
    //Añadido category.name para buscar por categoría
    public static function getGloballySearchableAttributes(): array
    {
        return ['name','category.name'];
    }
}
