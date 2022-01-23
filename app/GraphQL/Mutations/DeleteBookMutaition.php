<?php
namespace App\GraphQL\Mutations;
use App\Models\Book;
use Rebing\GraphQL\Support\Mutation;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use App\Models\User;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;

Class DeleteBookMutaition extends Mutation{

    protected $attributes = [
        'name' => 'deleteBook'
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
        ];
    }


    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $book = Book::find($args['id']);
        $book->delete();
        return $book;
    }

}
