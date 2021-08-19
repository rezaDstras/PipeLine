<?php


namespace App\QueryFilters;


use Closure;

class Sort extends Filter
{
//    public function handle($request ,closure $next)
//    {
//        if (! request()->has('sort')){
//            return $next($request);
//        }
//
//        $builder = $next($request);
//
//        return $builder->orderBy('title',request('sort'));
//    }

    protected function applyFilter($builder)
    {
        return $builder->orderBy('title',request($this->filterName()));
    }
}
