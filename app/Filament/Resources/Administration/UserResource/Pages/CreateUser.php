<?php

namespace App\Filament\Resources\Administration\UserResource\Pages;

use App\Filament\Resources\Administration\UserResource;
use Filament\Actions;
use Illuminate\Support\Facades\Password;
use Filament\Resources\Pages\CreateRecord;
use Filament\Facades\Filament;
use App\Notifications\ResetPasswordNotification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return __('User registered and Password set email sent!');
    }
    protected function afterCreate(): void
    {
        $user = $this->getRecord();

        if ($user->email) {
            Password::sendResetLink(
                [
                    'email' => $user->email
                ],
                function ($user, string $token) {
                    $notification = new ResetPasswordNotification($token);
                    $notification->url = Filament::getResetPasswordUrl($token, $user);
                    $user->notify($notification);
                }
            );
        }
    }
}
