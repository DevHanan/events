<?php
namespace App\Repositories;

use App\Models\Country;
use App\Repositories\AppRepository;
use Illuminate\Http\Request;

class PersonRepository extends AppRepository
{
    protected $model;
    
    public function __construct(Country $model)
    {
        $this->model = $model;
    }
    
    /**
     * set payload data for posts table.
     * 
     * @param Request $request [description]
     * @return array of data for saving.
     */
    protected function setDataPayload(Request $request)
    {
        return [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ];
    }
}