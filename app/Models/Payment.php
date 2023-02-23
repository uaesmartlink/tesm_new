<?php

namespace App\Models;

use Tzsk\Payu\Models\HasTransactions;
use Illuminate\Database\Eloquent\Builder;

class Payment extends Base
{
    use HasTransactions;

    public $assignUser = true;

    public $hasHash = true;

    public $hasReference = true;

    protected $casts = ['received' => 'boolean'];

    protected $fillable = [
        'date', 'reference', 'amount', 'gateway', 'user_id', 'account_id', 'received', 'hash', 'description', 'file', 'customer_id', 'order_id', 'transaction_id', 'gateway_transaction_id',
    ];

    // protected $with = ['user'];

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

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('amount');
    }

    public static function scopeDue($query)
    {
        return $query->whereNull('received')->orWhere('received', 0);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('reference', 'like', '%' . $search . '%')
                    ->orWhereHas('customer', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('phone', 'like', '%' . $search . '%');
                    });
            });
        })->when($filters['received'] ?? null, function ($query, $received) {
            if ($received == 'no') {
                $query->due();
            } elseif ($received == 'yes') {
                $query->received();
            }
        })->when($filters['gateway'] ?? null, function ($query, $gateway) {
            $query->where('gateway', $gateway);
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }

    public static function scopeOfCustomer($query, $customer_id)
    {
        return $query->where('customer_id', $customer_id);
    }

    public static function scopeReceived($query)
    {
        return $query->where('received', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
