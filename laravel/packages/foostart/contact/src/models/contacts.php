<?php

namespace Foostart\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model {

    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = [
        'contact_name',
        'contact_cv',
        'contact_sdt',
        'contact_mail',
        'contact_skype',
        
    ];
    protected $primaryKey = 'contact_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_contacts($params = array()) {
        $eloquent = self::orderBy('contact_id');

        //contact_name
        if (!empty($params['contact_name'])) {
            $eloquent->where('contact_name', 'like', '%'. $params['contact_name'].'%');
        }
        //contact_
        if (!empty($params['contact_cv'])) {
            $eloquent->where('contact_cv', 'like', '%'. $params['contact_cv'].'%');
        }
        //contact_name
        if (!empty($params['contact_sdt'])) {
            $eloquent->where('contact_sdt', 'like', '%'. $params['contact_sdt'].'%');
        }
        //contact_name
        if (!empty($params['contact_mail'])) {
            $eloquent->where('contact_mail', 'like', '%'. $params['contact_mail'].'%');
        }
        //contact_name
        if (!empty($params['contact_skype'])) {
            $eloquent->where('contact_skype', 'like', '%'. $params['contact_skype'].'%');
        }
        

        $contacts = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $contacts;
    }



    /**
     *
     * @param type $input
     * @param type $contact_id
     * @return type
     */
    public function update_contact($input, $contact_id = NULL) {

        if (empty($contact_id)) {
            $contact_id = $input['contact_id'];
        }

        $contact = self::find($contact_id);

        if (!empty($contact)) {

            $contact->contact_name = $input['contact_name'];
            $contact->contact_cv = $input['contact_cv'];
            $contact->contact_sdt = $input['contact_sdt'];
            $contact->contact_mail = $input['contact_mail'];
            $contact->contact_skype = $input['contact_skype'];

            $contact->save();

            return $contact;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_contact($input) {

        $contact = self::create([
                    'contact_name' => $input['contact_name'],
                    'contact_cv' => $input['contact_cv'],
                    'contact_sdt' => $input['contact_sdt'],
                    'contact_mail' => $input['contact_mail'],
                    'contact_skype' => $input['contact_skype'],
        ]);
        return $contact;
    }
}
