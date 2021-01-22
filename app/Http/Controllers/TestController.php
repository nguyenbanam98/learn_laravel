<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Container\Container;
use App\Service\UserService;

class TestController extends Controller
{
    /**
     * @var UserService
     */
    private $service;

    public function __construct(UserService  $service)
    {

        $this->service = $service;
    }

    public function register(Request $request)
    {
        $this->service->register($request);
//        $service = new UserService(
//                new Sha1Hasher('0123'),
//                new Mailer(new FakeMailTransport())
//        );

//        $container = Container::getInstance();
//        $container->bind(MailTransport::class, FakeMailTransport::class);
//
//        $service = $container->make(UserService::class);
//
//
//        dd($service);
//
//        $service->register($request);


    }
}









