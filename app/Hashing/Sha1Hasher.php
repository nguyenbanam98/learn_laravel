<?php


namespace App\Hashing;



class Sha1Hasher implements Hasher
{
    private $salt;

    public function __construct($salt)
    {
        $this->salt = $salt;
    }


    public function make($value)
    {
        return sha1($value . $this->salt);
    }

    public function verify($value, $hashed)
    {
        return $this->make($value) === $hashed;
    }


}
