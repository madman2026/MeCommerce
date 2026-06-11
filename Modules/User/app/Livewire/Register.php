<?php

namespace Modules\User\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Modules\User\Models\User;

class Register extends Form
{
    #[Validate('required|string|email|max:255|unique:users,email')]
    public string $email;

    #[Validate('required|string|min:6|confirmed:password_confirmation')]
    public string $password;

    public string $password_confirmation;

    #[Validate('nullable|boolean')]
    public ?bool $remember;

    public function register(): void
    {
        $user = User::query()->create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Auth::login($user);
    }
}
