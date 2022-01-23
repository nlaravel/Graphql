<?php

namespace App\GraphQl\Query;
use App\Models\User;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use App\Models\Book;

class BookQuery extends Query{

    protected $attributes = [
        'name' => 'book',
    ];
    /* determine the  type */
    public function type(): Type
    {
        return GraphQL::type('BookType');
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

            return Book::find($args['id']);

    }

}