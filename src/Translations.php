<?php

namespace NickDeKruijk\Translations;

use App;

trait Translations {

    public function __($column)
    {
        return $this->trans($column);
    }

    public function trans($column)
    {
        $locale = App::getLocale();

        $postfix = config('translations.postfixes');
        if (isset($postfix[$locale])) {
            $postfix = $postfix[$locale];
        } elseif (isset($postfix['*'])) {
            $postfix = str_replace('*', $locale, $postfix['*']);
        } else {
            return null;
        }

        $column .= $postfix;

        return $this->$column;
    }


}
