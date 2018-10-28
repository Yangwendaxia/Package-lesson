<?php
use PHPUnit\Framework\TestCase;
use Yangwendaxia\Hasher\MyMD5Hasher;

class MyMD5HasherTest extends TestCase
{
    protected $hasher;

    public function setup()
    {
        $this->hasher = new MyMD5Hasher();
    }


    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $passwordTwo = $this->hasher->make('password',['salt' => 'yw']);
        $password = md5('passwordyw');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password',$password);

        $this->assertTrue($passwordCheck);
    }

}