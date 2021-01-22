<?php


namespace App\Hashing;


interface Hasher
{
    /**
     * @param string $value
     * @return string
     */
    public function make($value);


    /**
     * @param $value
     * @param $hashed
     * @return boolean
     */
    public function verify($value, $hashed);
}
