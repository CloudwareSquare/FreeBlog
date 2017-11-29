<?php

namespace Cloudware\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'subtitle', 'post', 'category', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Accessors
    public function getCreatedAtAttribute($value)
    {
        $spanish_months = array(
            'January' => 'Enero',
            'February' => 'Febrero',
            'March' => 'Marzo',
            'April' => 'Abril',
            'May' => 'Mayo',
            'June' => 'Junio',
            'July' => 'Julio',
            'August' => 'Agosto',
            'September' => 'Septiembre',
            'October' => 'Octubre',
            'November' => 'Noviembre',
            'December' => 'Diciembre'
        );

        $day = date("d", strtotime($value));
        $month = date("F", strtotime($value));
        $year = date("Y", strtotime($value));
        $value = $day . ' de ' . $spanish_months[$month] . ' de ' . $year;

        return ($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        $spanish_months = array(
            'January' => 'Enero',
            'February' => 'Febrero',
            'March' => 'Marzo',
            'April' => 'Abril',
            'May' => 'Mayo',
            'June' => 'Junio',
            'July' => 'Julio',
            'August' => 'Agosto',
            'September' => 'Septiembre',
            'October' => 'Octubre',
            'November' => 'Noviembre',
            'December' => 'Diciembre'
        );

        $day = date("d", strtotime($value));
        $month = date("F", strtotime($value));
        $year = date("Y", strtotime($value));
        $value = $day . ' de ' . $spanish_months[$month] . ' de ' . $year;

        return ($value);
    }

    //Scopes
    public function scopeJoinUser($query)
    {
        $query->select('posts.id', 'posts.title', 'posts.subtitle', 'posts.post', 'posts.category', 'posts.created_at', 'users.name')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->orderBy('posts.created_at', 'desc');
    }
}
