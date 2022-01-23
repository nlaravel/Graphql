<?php

namespace App\GraphQl\Types;
use GraphQL\Type\Definition\ResolveInfo;
use App\Models\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\Author;
class   AuthorType extends GraphQLType {

    /* determine the model and name & description*/
    protected $attributes = [
        'name'          => 'AuthorType',
        'description'   => 'A Author',
        // Note: only necessary if you use `SelectFields`
        'model'         => Author::class,
    ];

    /* determine the filed  and the type of filed want to be return*/
    public function fields(): array
    {

        return [

            'id' => [
                'type' => Type::int(),
            ],

            'name' => [
                'type' => Type::string(),
            ],
            'age' => [
                'type' => Type::string(),
            ],
            'books' => [
                'type' => Type::listOf(GraphQL::type('BookType')),
            ],

        ];
    }
}
