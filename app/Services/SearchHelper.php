<?php

namespace App\Services;

class SearchHelper {

    public static function replaceSearchByMark(string $search, string $subject): string
    {
        $search_escaped = preg_quote($search, '/');
        $result = preg_replace("/($search_escaped)/i", '<mark>$1</mark>', $subject);

        return $result;
    }

}
