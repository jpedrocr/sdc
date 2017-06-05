<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;

class Article extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $fillable = ['slug', 'title', 'content', 'image', 'status', 'featured', 'date', 'template', 'extras'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'featured'  => 'boolean',
        'date'      => 'date',
    ];
	protected $fakeColumns = ['extras'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'article_category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                    ->where('date', '<=', date('Y-m-d'))
                    ->orderBy('date', 'DESC');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

	public function getCustomExtrasAttribute()
    {
		return json_decode($this->extras);
    }

	public function getCustomDateAttribute()
    {
        return Carbon::parse($this->date)->format('d/m/Y');
    }

	public function getCustomTitleAttribute()
    {
		$extras = $this->custom_extras;

		if (isset($extras->json_titulo)) {
            return $extras->json_titulo;
        } else {
			return $this->title;
        }
    }

	public function getCustomImageAttribute()
    {
		$extras = $this->custom_extras;

		if (isset($extras->json_imagem)) {
            return $extras->json_imagem;
		} else {
			return $this->image;
        }
    }

	public function getCustomSmallTextAttribute()
    {
		$extras = $this->custom_extras;

		if (isset($extras->json_texto)) {
            return $extras->json_texto;
		} elseif (isset($extras->json_conteudo)) {
			$resultado = array();

			foreach (json_decode($extras->json_conteudo)->conteudo as $linha) {
				if (in_array($linha->tipo, [ "h2", "normal", "small" ])) {
					$resultado[] = $linha->conteudo;
				} elseif ($linha->tipo == "separador") {
					$resultado[] = "|";
				}
			}

            return str_limit(implode(" ", $resultado), 180);
		} else {
			return "<!-- Texto -->";
        }
	}

	/*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

}
