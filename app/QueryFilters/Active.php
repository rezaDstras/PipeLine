<?php


namespace App\QueryFilters;


use Closure;

class Active extends Filter
{
//    public function handle($request ,closure $next)
//    {
//        if (! request()->has('active')){
//            return $next($request);
//        }
//
//        $builder = $next($request);
//
//        return $builder->where('active',request('active'));
//    }

    protected function applyFilter($builder)
    {
        return $builder->where($this->filterName(),request($this->filterName()));
    }
}
