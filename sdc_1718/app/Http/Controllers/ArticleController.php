<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$articles = Article::where('status', 'PUBLISHED')
                    	   ->where('date', '<=', date('Y-m-d'))
                           ->orderBy('date', 'DESC')
						   ->paginate(10);

		$this->data['articles'] = $articles;

		return view('articles.json_sdc_2016_list', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
		$article = Article::findBySlug($slug);

		if (!$article)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['article'] = $article->withFakes();

        return view('articles.'.$article->template, $this->data);
    }
}
