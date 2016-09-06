<?php namespace Verlanglijstjes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * This Eloquent Model represents a wish list item
 *
 * @author Bas de Ruiter
 * @property User user
 * @property string description
 * @property string link
 * @property User claimedBy
 * @property Carbon claimed_at
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class WishList extends Model
{
    use SoftDeletes;

    protected $dates = ['claimed_at', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function claimedBy()
    {
        return $this->belongsTo(User::class, 'claimed_by');
    }
}
