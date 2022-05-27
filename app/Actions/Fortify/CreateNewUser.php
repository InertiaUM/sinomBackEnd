<?php

namespace App\Actions\Fortify;

use App\Models\{Company, User};
use Illuminate\Support\Facades\{Hash, Storage, Validator};
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
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'loa' => ['required', 'file', 'max:1024', 'mimetypes:application/pdf']
        ]);

        $directory = Company::FOLDER.date('Y/m/d/');

        $company = Company::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'loa' => request()->file('loa')->store($directory)
        ]);

        return $company->users()->create([
            'name' => 'Admin '.$input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
