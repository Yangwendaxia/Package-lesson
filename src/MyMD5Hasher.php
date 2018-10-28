<?php


namespace Yangwendaxia\Hasher;


use function hash;

/**
 * Class MyMD5Hasher
 * @package Yangwendaxia\Hasher
 */
class MyMD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt'])?:'';

        return hash('md5',$value.$salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options)
    {
        $salt = isset($options['salt'])?:'';

        return hash('md5', $value.$salt) === $hashValue;
    }

}
