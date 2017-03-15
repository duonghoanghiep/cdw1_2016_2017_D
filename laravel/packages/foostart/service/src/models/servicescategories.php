<?php

namespace Foostart\Service\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategories extends Model {

    protected $table = 'services_categories';
    public $timestamps = false;
    protected $fillable = [
        'service_category_title',
        'service_category_nd',
    ];
    protected $primaryKey = 'service_category_id';

    public function get_services_categories($params = array()) {
        $eloquent = self::orderBy('service_category_id');

        if (!empty($params['service_category_title'])) {
            $eloquent->where('service_category_title', 'like', '%' . $params['service_category_title'] . '%');
        }
        if (!empty($params['service_category_nd'])) {
            $eloquent->where('service_category_nd', 'like', '%' . $params['service_category_nd'] . '%');
        }

        $services_category = $eloquent->paginate(20);
        return $services_category;
    }

    /**
     *
     * @param type $input
     * @param type $service_id
     * @return type
     */
    public function update_service($input, $service_id = NULL) {

        if (empty($service_id)) {
            $service_id = $input['service_category_id'];
        }

        $service = self::find($service_id);

        if (!empty($service)) {

            $service->service_category_title = $input['service_category_title'];
            $service->service_category_nd = $input['service_category_nd'];


            $service->save();

            return $service;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_service($input) {

        $service = self::create([
                    'service_category_title' => $input['service_category_title'],
                    'service_category_nd' => $input['service_category_nd'],
                    
        ]);
        return $service;
    }

}
