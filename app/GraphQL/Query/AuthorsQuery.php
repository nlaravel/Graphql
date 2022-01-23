<?php

namespace App\GraphQl\Query;
use App\Models\User;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\Models\Author;

class AuthorsQuery extends Query{

    protected $attributes = [
        'name' => 'authors',
    ];
    /* determine the  type of list of  object of books */
    public function type(): Type
    {
        return  Type::listOf(GraphQL::type('AuthorType'));
    }
    /* don't  have   arguments because return collection*/



    /* how get data from data base */
    public function resolve($root, array $args)
    {

        return Author::all();

    }

}