<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class faqs extends Model {

    protected $table = 'faqs';
    public $timestamps = false;
    protected $fillable = [
        'faq_title',
        'faq_nd',
        
    ];
    protected $primaryKey = 'faq_id';

    public function get_faqs($params = array()) {
        $faq = self::paginate(10);
        return $faq;
    }

    public function update_faq($input, $faq_id = NULL) {

        if (empty($faq_id)) {
            $faq_id = $input['faq_id'];
        }

        $faq = self::find($faq_id);

        if (!empty($faq)) {

            $faq->faq_title = $input['faq_title'];
            $faq->faq_nd = $input['faq_nd'];
            

            $faq->save();

            return $faq;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_faq($input) {

        $faq = self::create([
                    'faq_title' => $input['faq_title'],
                    'faq_nd' => $input['faq_nd'],
                    
        ]);
        return $faq;
    }
    
}
