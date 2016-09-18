<?php namespace Verlanglijstjes;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * This Eloquent Model represents a user and allows the user to log in
 *
 * @author Bas de Ruiter
 * @property string name
 * @property string email
 * @property int rank
 * @property string chocolate_preference
 * @property int order
 * @property Carbon created_at
 * @property Carbon updated_at
 */

class User extends Authenticatable
{
    use Notifiable;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'rank', 'chocolate_preference', 'order'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishListItems()
    {
        return $this->hasMany(Wish::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claimesItems()
    {
        return $this->hasMany(Wish::class, 'claimed_by');
    }

}
