<?php
namespace App\Repositories\Boxers;

use App\Boxer;
use Carbon\Carbon;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class BoxersRepository extends BaseRepository {
    
    public function create($params)
    {
        // check age
        $birth_date = $params['birth_date'];
        $params['birth_date'] = Carbon::createFromFormat('d/m/Y', $params['birth_date']);
        $params['comment'] = 'comment';
        $boxer = parent::create($params);
        $boxer->types()->sync($params['types']);
        // $boxer->types;
    }

    public function update($params, $id){
        $birth_date = $params['birth_date'];
        $params['birth_date'] = Carbon::createFromFormat('d/m/Y', $params['birth_date']);
        $params['comment'] = 'comment';
        $boxer = parent::update($params, $id);
        $boxer->types()->sync($params['types']);
    }

    /**
     * get the boxer of certain categorie (tatami or ring)
     *
     * @param String $category (tatami or ring)
     * @return Collection boxers of the category
     */
    public function ofCategory($category){
        return Boxer::whereHas('types', function($q) use ($category){
            $q->where('category', $category);
        })->with('types')->get();
    }

    /**
     * filterAges
     *
     * @param Collection $boxers
     * @return array ['poussin', 'minim', 'cadet', 'junior', 'senior']
     */
    public function filterAges($boxers)
    {
        $poussin = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 3 && $val['birth_date']->age <= 9;
        });

        $ecole = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 10 && $val['birth_date']->age <= 12;
        });

        $minime = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 13 && $val['birth_date']->age <= 14;
        });

        $cadet = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 15 && $val['birth_date']->age <= 16;
        });

        $junior = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 17 && $val['birth_date']->age <= 18;
        });

        $senior = $boxers->filter(function($val , $key){
            return $val['birth_date']->age >= 19;
        });

        return compact('poussin', 'ecole', 'minime', 'cadet' ,'junior', 'senior');
    }
}