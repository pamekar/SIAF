<?php


namespace App\Http\GraphQL\Mutations;


use App\Exceptions\PasswordException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class UserMutator
{

    /**
     * @param                $root
     * @param array          $args
     * @param GraphQLContext $context
     *
     * @return array
     */
    public function updateEmail($root, array $args, GraphQLContext $context)
    {
        $user = $context->user();
        $user->email = $args['email'];
        $user->save();
        return ['email' => $user->email];
    }

    /**
     * @param                $root
     * @param array          $args
     * @param GraphQLContext $context
     *
     * @return array
     */
    public function updateName($root, array $args, GraphQLContext $context)
    {
        $user = $context->user();
        $user->name = $args['name'];
        $user->save();
        return ['name' => $user->name];
    }

    /**
     * Change password.
     *
     * @param Request $request
     *
     * @return array
     */
    public function updatePassword($root, array $args, GraphQLContext $context)
    {

        $user = $context->user();
        $this->validator($args)->validate();
        if (Hash::check($args['current_password'], $user->password)) {
            $user->password = Hash::make($args['new_password']);
            $user->save();
            return ['status' => 'Password change successfully!'];
        } else {
            throw new PasswordException('Incorrect Password',
                'current_password', 'You entered an incorrect password');
        }
    }

    /**
     * Get a validator for an incoming change password request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'current_password' => 'required',
            'new_password'     => 'required|min:6|confirmed',
        ]);
    }
}
// drg >> 