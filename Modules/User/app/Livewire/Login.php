<?php

namespace Modules\User\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class Login extends Form
{
    #[Validate('required|string|email|max:255|exists:users,email')]
    public string $email;

    #[Validate('required|string|min:6')]
    public string $password;

    #[Validate('nullable|boolean')]
    public ?bool $remember;

    public function login(): void
    {
        Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember ?? false);
    }
}
