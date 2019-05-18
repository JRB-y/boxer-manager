<?php
namespace App\Repositories\Boxers;

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
}