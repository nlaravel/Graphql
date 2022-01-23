<?php

namespace App\GraphQl\Types;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use App\Models\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\Book;
 class   BookType extends GraphQLType {

     /* determine the model and name & description*/
     protected $attributes = [
         'name'          => 'BookType',
         'description'   => 'A Book',
         // Note: only necessary if you use `SelectFields`
         'model'         => Book::class,
     ];

     /* determine the filed  and the type of filed want to be return*/
     public function fields(): array
     {

         return [

             'id' => [
                 'type' => Type::int(),
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

             'author' => [
                 'type' =>GraphQL::type('AuthorType')
             ],
         ];
     }
 }
