<?php

use Auth;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = new User;
        $user->name = "test";
        $user->email = "test@example.net";
        $user->password = bcrypt("test");
        $user->save();
        Auth::once(['email' => 'test@example.net', 'password' => 'test']);
    }
}
