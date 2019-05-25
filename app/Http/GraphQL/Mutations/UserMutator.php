<?php


namespace App\Http\GraphQL\Mutations;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class UserMutator
{


    /**
     * Change password.
     *
     * @param Request $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function changePassword($root, array $args, GraphQLContext $context)
    {
        $user = $context->user();
        $this->validator($args)->validate();
        if (Hash::check($args['current_password'], $user->password)) {
            $user->password = $args['new_password'];
            $user->save();
            return response()->json(['message' => 'Password change successfully!'],
                200);
        } else {
            return response()->json(['message' => 'Current password is incorrect'],
                '403');
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