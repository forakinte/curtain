<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Character;
use App\Repositories\CharacterRepository;

class CharacterTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     */
    public function testCharacterGet()
    {
        foreach(range(1, 10) as $index) {
            Character::create([
                'name' => "test{$index}"
            ]);
        };

        $characterRepository = App::make(CharacterRepository::class);
        $data = $characterRepository->getList(1, 10);

        $this->assertCount(10, $data);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCharacterAdd()
    {
        $this->json('POST', '/api/v1/add', ['name' => 'test'])
            ->seeInDatabase('character', ['name' => 'test']);
    }

    /**
     * @return void
     */
    public function testCharacterGetOnce()
    {
        $this->json('GET', '/api/v1/show/1')
            ->seeInDatabase('character', ['name' => 'admin']);
    }

}
