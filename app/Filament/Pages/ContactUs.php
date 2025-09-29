<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use UnitEnum;

class ContactUs extends Page
{
    protected string $view = 'filament.pages.contact-us';

    //agrupar els items del la barra de navegació
    protected static string|UnitEnum|null $navigationGroup = 'Páginas';

}
