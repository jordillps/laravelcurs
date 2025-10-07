<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Collection;


class CustomData extends Page implements HasTable
{
    protected string $view = 'filament.pages.custom-data';

   use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->records(
                fn(array $filters): Collection => collect([
                    1 => [
                        'title' => 'What is Filament?',
                        'slug' => 'what-is-filament',
                        'author' => 'Dan Harrin',
                        'is_featured' => true,
                        'creation_date' => '2021-01-01',
                    ],
                    2 => [
                        'title' => 'Top 5 best features of Filament',
                        'slug' => 'top-5-features',
                        'author' => 'Ryan Chandler',
                        'is_featured' => false,
                        'creation_date' => '2021-03-01',
                    ],
                    3 => [
                        'title' => 'Tips for building a great Filament plugin',
                        'slug' => 'plugin-tips',
                        'author' => 'Zep Fietje',
                        'is_featured' => true,
                        'creation_date' => '2023-06-01',
                    ],
                ])
                    ->when(
                        $filters['is_featured']['isActive'] ?? false,
                        fn(Collection $data): Collection => $data->where(
                            'is_featured',
                            true
                        ),
                    )
                    ->when(
                        filled($author = $filters['author']['value'] ?? null),
                        fn(Collection $data): Collection => $data->where(
                            'author',
                            $author
                        ),
                    )
                    ->when(
                        filled($date = $filters['creation_date']['date'] ?? null),
                        fn(Collection $data): Collection => $data->where(
                            'creation_date',
                            $date
                        ),
                    )
            )
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('slug'),
                IconColumn::make('is_featured')
                    ->boolean(),
                TextColumn::make('author'),
            ])
            ->filters([
                Filter::make('is_featured'),
                SelectFilter::make('author')
                    ->options([
                        'Dan Harrin' => 'Dan Harrin',
                        'Ryan Chandler' => 'Ryan Chandler',
                        'Zep Fietje' => 'Zep Fietje',
                    ]),
                Filter::make('creation_date')
                    ->schema([
                        DatePicker::make('date'),
                    ]),
            ]);
    }
}
