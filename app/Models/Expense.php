<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Expense extends Base
{
    public $assignUser = true;

    protected $fillable = ['name', 'amount', 'user_id', 'description'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('mine', function (Builder $builder) {
            $user = auth()->user();
            if (!$user->owner && !$user->view_all) {
                return $builder->where('user_id', $user->id);
            }
        });
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
