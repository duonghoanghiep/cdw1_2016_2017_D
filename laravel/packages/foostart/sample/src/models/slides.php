<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class slides extends Model {

    protected $table = 'slides';
    public $timestamps = false;
    protected $fillable = [
        'slide_img',
        
        
    ];
    protected $primaryKey = 'slide_id';

    public function get_slides($params = array()) {
        $slide = self::paginate(10);
        return $slide;
    }

    public function update_slide($input, $slide_id = NULL) {

        if (empty($slide_id)) {
            $slide_id = $input['slide_id'];
        }

        $slide = self::find($slide_id);

        if (!empty($slide)) {

            $slide->slide_img = $input['slide_img'];
          
            

            $slide->save();

            return $slide;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_slide($input) {

        $slide = self::create([
                    'slide_title' => $input['slide_title'],
                    'slide_nd' => $input['slide_nd'],
                    
        ]);
        return $slide;
    }
    
}
