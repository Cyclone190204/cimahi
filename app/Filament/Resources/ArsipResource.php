<?php

namespace App\Filament\Resources;

use App\Models\Arsip;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use App\Filament\Resources\ArsipResource\Pages;

class ArsipResource extends Resource
{
    protected static ?string $model = Arsip::class;
    protected static ?string $navigationLabel = 'Arsip Penduduk';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Administrasi Desa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('no_kk')
                ->maxLength(50),

            Forms\Components\TextInput::make('no_ktp')
                ->maxLength(50),

            Forms\Components\FileUpload::make('file_kk')
                ->directory('arsip/kk')
                ->disk('public')
                ->preserveFilenames(),

            Forms\Components\FileUpload::make('file_ktp')
                ->directory('arsip/ktp')
                ->disk('public')
                ->preserveFilenames(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
          ->columns([
    Tables\Columns\TextColumn::make('id')->label('No')->sortable(),
    Tables\Columns\TextColumn::make('nama')->searchable()->sortable(),
    Tables\Columns\TextColumn::make('no_kk'),
    Tables\Columns\TextColumn::make('no_ktp'),

    Tables\Columns\TextColumn::make('file_kk')
        ->label('File KK')
        ->formatStateUsing(function ($state) {
            if (!$state) return '-';
            $url = asset('storage/' . $state);
            return '
                <a href="' . $url . '" target="_blank" class="text-green-500 font-semibold mr-2">Lihat</a>
                <a href="' . $url . '" download class="text-blue-500 font-semibold">Download</a>
            ';
        })
        ->html(),

    Tables\Columns\TextColumn::make('file_ktp')
        ->label('File KTP')
        ->formatStateUsing(function ($state) {
            if (!$state) return '-';
            $url = asset('storage/' . $state);
            return '
                <a href="' . $url . '" target="_blank" class="text-green-500 font-semibold mr-2">Lihat</a>
                <a href="' . $url . '" download class="text-blue-500 font-semibold">Download</a>
            ';
        })
        ->html(),
])

            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArsips::route('/'),
            'create' => Pages\CreateArsip::route('/create'),
            'edit' => Pages\EditArsip::route('/{record}/edit'),
        ];
    }
}
