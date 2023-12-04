<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'application_id',
        'rh_user_id',
        'note',
        'observation',
    ];

    protected $searchableFields = ['*'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function rhUser()
    {
        return $this->belongsTo(RhUser::class);
    }
}
