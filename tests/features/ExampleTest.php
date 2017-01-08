<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name'=>'Anwar Sarmiento',
            'email'=>'anwarsarmiento@gmail.com',

        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
             ->see('Anwar Sarmiento')
             ->see('anwarsarmiento@gmail.com');
    }
}
