<?php

namespace App\Providers;

use App\Billing\PaymentGateway;
use App\Hashing\Sha1Hasher;
use App\Mail\FakeMailTransport;
use App\Mail\GmailMailTransport;
use App\Mail\MailTransport;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Sha1Hasher::class, function ($app) {
            return new Sha1Hasher('usd');
        });
        $this->app->bind(MailTransport::class, FakeMailTransport::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
