<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('noprod')->disabled()->default(fn() => self::generateNextNoprod())->required(),
                        TextInput::make('nama')->required(),
                        TextInput::make('harga')->required()->numeric()->mask(fn(TextInput\Mask $mask) => $mask->money(prefix: 'Rp ', thousandsSeparator: '.')),
                        FileUpload::make('gambar')->directory('uploads/gambar')->image(),
                        Select::make('pop')->options(['Ya' => 'Ya', 'Tidak' => 'Tidak'])->required(),
                        TextInput::make('tiktok')->required(),
                        TextInput::make('shopee')->required()
                    ])
                    ->columns(2),
            ]);
    }

    /**
     * Method untuk mengenerate noprod secara otomatis.
     */
    protected static function generateNextNoprod(): string
    {
        $prefix = 'AA'; // Prefiks tetap
        $modelClass = static::getModel(); // Mendapatkan model terkait resource
        $lastRecord = $modelClass::query()
            ->where('noprod', 'like', "{$prefix}%") // Hanya mencari record dengan prefiks 'AA'
            ->latest('noprod')
            ->first();

        // Ambil angka dari `noprod`, atau mulai dari 0 jika belum ada
        $lastNumber = $lastRecord
            ? intval(substr($lastRecord->noprod, strlen($prefix)))
            : 0;

        // Tambahkan 1 ke angka terakhir dan format ulang
        return $prefix . sprintf('%05d', $lastNumber + 1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('noprod')->sortable(),
                TextColumn::make('nama')->sortable(),
                TextColumn::make('harga')->sortable()->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                ImageColumn::make('gambar')->label('Gambar')->url(fn($record) => $record->path),
                TextColumn::make('pop')->sortable(),
                TextColumn::make('tiktok')->sortable(),
                TextColumn::make('shopee')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
