<?php

namespace App\Models;

use Framework\Core\Model;

class Team extends Model
{
    protected static ?string $tableName = 'teams';

    protected static ?array $fillable = ['name', 'country', 'foundedYear', 'stadium'];

    public $id;
    public $name;
    public $country;
    public $foundedYear;
    public $stadium;
}
