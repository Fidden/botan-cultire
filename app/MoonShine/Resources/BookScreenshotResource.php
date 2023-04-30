<?php

namespace App\MoonShine\Resources;

use App\Models\BookScreenshot;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Resources\Resource;

class BookScreenshotResource extends Resource
{
    public static string $model = BookScreenshot::class;

    public static string $title = 'BookScreenshot';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('book', 'book', 'name'),
            Image::make('src')
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
