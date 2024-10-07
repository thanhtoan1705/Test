<?php

namespace App\Filament\Resources\Admin\CV;

use App\Filament\Resources\Admin\CV\CvTemplateResource\Pages;
use App\Filament\Resources\Admin\CV\CvTemplateResource\RelationManagers;
use App\Models\CvTemplate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CvTemplateResource extends Resource
{
    protected static ?string $model = CvTemplate::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationLabel = 'Mẫu CV';

    protected static ?string $modelLabel = 'Mẫu CV';

    protected static ?string $navigationGroup = 'CV';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('template_name')
                            ->required()
                            ->label('Tên mẫu CV')
                            ->columnSpan(2),

                        Forms\Components\FileUpload::make('template_image')
                            ->label('Hình ảnh mẫu CV')
                            ->columnSpan(1),

                        Forms\Components\Textarea::make('template_description')
                            ->label('Mô tả mẫu CV')
                            ->rows(3)
                            ->columnSpan(1),
                    ]),

                    Forms\Components\Grid::make(1)
                    ->schema([
                        TiptapEditor::make('template_content')
                            ->label('Nội dung mẫu CV')
                            ->default(fn ($record) => htmlspecialchars($record->template_content) ?? '')                            ->tools([
                                'bold',
                                'italic',
                                'strike',
                                'underline',
                                'link',
                            ])
                            ->hint('Bạn có thể sử dụng các công cụ định dạng để tạo CV chuyên nghiệp.')
                            ->columnSpan(1),
                    ]),
                ])
                    ->columnSpan(2)
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('template_name')->label('Tên mẫu CV'),
                Tables\Columns\ImageColumn::make('template_image')->label('Hình ảnh')->size(50),
                Tables\Columns\TextColumn::make('template_description')->label('Mô tả'),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('preview')
                    ->label('Xem trước')
                    ->url(fn ($record) => route('client.cv.preview', ['cvTemplate' => $record->id]))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListCvTemplates::route('/'),
            'create' => Pages\CreateCvTemplate::route('/create'),
            'edit' => Pages\EditCvTemplate::route('/{record}/edit'),
        ];
    }
}