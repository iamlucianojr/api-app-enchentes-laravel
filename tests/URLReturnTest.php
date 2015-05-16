<?php
use App\Http\Controllers\EventController;
use \Mockery as m;
use Laracasts\TestDummy\Factory;

/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 14/05/15
 * Time: 11:12
 */

class URLReturnTest extends TestCase
{
    protected $eventTest;
    protected function assertPreConditions()
    {
        parent::assertPreConditions();
        $this->assertTrue(
            file_exists($file = __DIR__.'/../app/Http/routes.php'),
            'File not found: '.$file
        );

        $this->assertTrue(
            class_exists($class = 'App\Event'),
            'Class not found: '.$class
        );
    }


    /** @test **/
    public function test_it_event_is_save()
    {
        $this->eventTest = Factory::create('App\Event', ['title' => 'Test unit']);

    }

    /**
     * @depends test_it_event_is_save
     * @test **/
    public function test_it_verifies_that_page_return_json()
    {
        $this->get('event/')
            ->seeStatusCodeIs(200)
            ->andSeeJson()
            ->andSeeJsonContains(['title' => 'Test unit']);
    }

    public function testUpdateEventWithValidArguments()
    {
    }
}
