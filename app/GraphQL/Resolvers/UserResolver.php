<?php

namespace App\GraphQL\Resolvers;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserResolver
{
    public function createUser($root, array $args)
    {
  Log::info('Custom createUser resolver called', ['args' => $args]);
        $input = $args['input'];

        // You can add validation here if needed

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
        ]);

        return $user;
    }
}
