<?php
namespace App\GraphQL\Mutations;
use App\Models\Book;
use Rebing\GraphQL\Support\Mutation;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use App\Models\User;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;

Class UpdateBookMutaition extends Mutation{

    protected $attributes = [
        'name' => 'updateBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('BookType');
    }


    public function args(): array
    {
        return [
            'id' => [
                'type' =>Type::int(),
            ],
            'title' => [
                'type' => Type::string(),
            ],
            'year' => [
                'type' => Type::int(),
            ],
            'number_of_pages' => [
                'type' => Type::int(),
            ],

            'author_id' => [
                'type' =>Type::int(),
            ],
        ];
    }


    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $book = Book::find($args['id']);
        $book->fill($args);
        $book->save();
        return $book;
    }

}
