<?php

namespace Verlanglijstjes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * This Eloquent Model represents a wish list item
 *
 * @author Bas de Ruiter
 * @property int user_id
 * @property string description
 * @property string link
 * @property int claimed_by
 * @property Carbon claimed_at
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class Wish extends Model
{
    use SoftDeletes;

    protected $dates = ['claimed_at', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return BelongsTo|User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsTo|User
     */
    public function claimedBy()
    {
        return $this->belongsTo(User::class, 'claimed_by');
    }

    public function isClaimed()
    {
        return ! empty($this->claimed_by);
    }

    public function toggleClaim()
    {
        $userId = \Auth::user()->id;

        // if wish is claimed it can only be unclaimed by that user
        if ($this->isClaimed() && $this->claimed_by == $userId) {
            $this->claimed_by = null;
            $this->claimed_at = null;
        }
        // If wish is unclaimed it can only be claimed by someone who is not the owner of the wish
        // We have to use elseif, because otherwise the previous unclaim will always be immediately reverted here :)
        elseif (! $this->isClaimed() && $this->user_id != $userId) {
            $this->claimed_by = $userId;
            $this->claimed_at = Carbon::now();
        }

        $this->save();
    }
}
