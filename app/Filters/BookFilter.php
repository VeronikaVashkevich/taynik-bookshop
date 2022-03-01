<?php


namespace App\Filters;


class BookFilter extends QueryFilter
{
    public function search_field($search_string = ''){
        return $this->builder
            ->where('name', 'LIKE', '%'.$search_string.'%')
            ->orWhere('author', 'LIKE', '%'.$search_string.'%');
    }
}
