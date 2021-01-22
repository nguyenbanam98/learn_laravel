<?php


namespace App\Service;
use App\Hashing\Sha1Hasher;
use App\Models\User;
use App\Mail\Mailer;

class  UserService
{
    /**
     * @var Hasher
     */
    private $hasher;
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * UserService constructor.
     * @param Sha1Hasher $hasher
     * @param Mailer $mailer
     */
    public function __construct(Sha1Hasher $hasher, Mailer $mailer)
    {

        $this->hasher = $hasher;
        $this->mailer = $mailer;
    }

    public function register($request)
    {
//        $hasher = new Sha1Hasher('0123');
        // Tao user

        $user = new User();

        // hash password
        $user->password = $this->hasher->make($request->get('password'));
        $user->email = $request->get('email');
        $user->name = 'Nam Nguyen';
//        $mailer = new Mailer(new GmailMailTransport());
        $this->mailer->send($user->email,'user.register', ['user' => $user]);

        dd($user);

        // Gui email cho user
    }
}

