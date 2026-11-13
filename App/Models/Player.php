<?php

namespace App\Models;

use Framework\Core\Model;

class Player extends Model
{
    protected static ?string $tableName = 'players';

    protected static ?array $fillable = ['name', 'surname', 'position', 'shirtNumber', 'teamId'];

    public $id;
    public $name;
    public $surname;
    public $position;
    public $shirtNumber;
    public $teamId;
}
