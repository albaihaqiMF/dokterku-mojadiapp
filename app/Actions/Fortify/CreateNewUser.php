<?php

namespace App\Actions\Fortify;

use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phoneNumber' => ['required', 'numeric'],
            'address' => ['string'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $last = DB::table('users')->orderBy('id', 'DESC')->first();
        $int = (int) filter_var($last->id, FILTER_SANITIZE_NUMBER_INT);
        $newId = 'USER0' . ($int+1);

        return User::create([
            'id' => $newId,
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'roleId' => 'PASIEN',
            'phoneNumber' => $input['phoneNumber'],
            'address' => $input['address']
        ]);
    }
}
