<?php

namespace NickDeKruijk\Translations;

use App;

trait Translations
{

    public function __($column, $locale = null)
    {
        return $this->trans($column, $locale);
    }

    public function trans($column, $locale = null)
    {
        $locale = $locale ?: App::getLocale();

        $postfix = config('translations.postfixes');
        if (isset($postfix[$locale])) {
            $postfix = $postfix[$locale];
        } elseif (isset($postfix['*'])) {
            $postfix = str_replace('*', $locale, $postfix['*']);
        } else {
            return null;
        }

        if (array_key_exists($column . $postfix, $this->attributes)) {
            $column .= $postfix;
        }

        return $this->$column;
    }
}
