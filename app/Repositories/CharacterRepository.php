<?php
namespace App\Repositories;

use Doctrine\Common\Collections\Collection;
use App\Models\Character;

class CharacterRepository
{
    /**
     * @var Character
     */
    protected $character;

    /**
     * CharacterRepository constructor.
     *
     * @param Character $character
     */
    public function __construct(Character $character)
    {
        $this->character = $character;
    }


    public function getList($page, $count)
    {
        $skip = ($page - 1) * $count;
        $list = $this->character->take($count)->skip($skip)->get();
        return $list;
    }

    public function getOnce($id)
    {
        return $this->character->where('id', $id)->get();
    }

    public function addNew($data)
    {
        $this->character->create([
            'name' => $data['name'],
        ]);
    }


}