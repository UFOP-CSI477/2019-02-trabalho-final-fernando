<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
/**
 * @property mixed nome_cliente
 */
class servico extends Model implements Searchable
{
    protected $fillable = ['nome_cliente'];

    public function getSearchResult(): SearchResult
    {
        $url = route('servicos.show', $this->id);

        return new SearchResult(
            $this,
            $this->nome_cliente,
            $url
        );
    }

    public function servicos()
    {
        return $this->hasMany('App\Servico');
    }
}
