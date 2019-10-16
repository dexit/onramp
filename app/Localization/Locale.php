<?php

namespace App\Localization;

class Locale
{
    protected $locales = [
        'en' => "English",
        'es' => "Española",
        'pt' => "Portuguesa",
        'sv' => "Svenska",
    ];

    public function all()
    {
        return $this->locales;
    }

    public function isValid($locale)
    {
        return in_array($locale, array_keys($this->locales));
    }
}
