<?php

namespace App\GraphQl\Query;
use App\Models\Author;
use App\Models\User;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\Models\Book;

class AuthorQuery extends Query{

    protected $attributes = [
        'name' => 'author',
    ];
    /* determine the  type of one object of book */
    public function type(): Type
    {
        return GraphQL::type('AuthorType');
    }
    /* determine the  arguments*/
    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
            ],
        ];
    }


    /* how get data from data base */
    public function resolve($root, array $args)
    {

        return Author::find($args['id']);

    }

}