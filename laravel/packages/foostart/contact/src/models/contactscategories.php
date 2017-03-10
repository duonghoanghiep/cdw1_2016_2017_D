<?php

namespace Foostart\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class ContactsCategories extends Model {

    protected $table = 'contacts_categories';
    public $timestamps = false;
    protected $fillable = [
        'contact_category_name',
        'contact_category_cv',
        'contact_category_sdt',
        'contact_category_mail',
        'contact_category_skype',
    ];
    protected $primaryKey = 'contact_category_id';

    public function get_contacts_categories($params = array()) {
        $eloquent = self::orderBy('contact_category_id');

        if (!empty($params['contact_category_name'])) {
            $eloquent->where('contact_category_name', 'like', '%'. $params['contact_category_name'].'%');
        }
         if (!empty($params['contact_category_cv'])) {
            $eloquent->where('contact_category_cv', 'like', '%'. $params['contact_category_cv'].'%');
        }
         if (!empty($params['contact_category_sdt'])) {
            $eloquent->where('contact_category_sdt', 'like', '%'. $params['contact_category_sdt'].'%');
        }
         if (!empty($params['contact_category_mail'])) {
            $eloquent->where('contact_category_mail', 'like', '%'. $params['contact_category_mail'].'%');
        }
         if (!empty($params['contact_category_skype'])) {
            $eloquent->where('contact_category_skype', 'like', '%'. $params['contact_category_skype'].'%');
        }
        $contacts_category = $eloquent->paginate(10);
        return $contacts_category;
    }

    /**
     *
     * @param type $input
     * @param type $contact_id
     * @return type
     */
    public function update_contact($input, $contact_id = NULL) {

        if (empty($contact_id)) {
            $contact_id = $input['contact_category_id'];
        }

        $contact = self::find($contact_id);

        if (!empty($contact)) {

            $contact->contact_category_name = $input['contact_category_name'];
             $contact->contact_category_cv = $input['contact_category_cv'];
              $contact->contact_category_sdt = $input['contact_category_sdt'];
               $contact->contact_category_mail = $input['contact_category_mail'];
                $contact->contact_category_skype = $input['contact_category_skype'];

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
                    'contact_category_name' => $input['contact_category_name'],
            'contact_category_cv' => $input['contact_category_cv'],
            'contact_category_sdt' => $input['contact_category_sdt'],
            'contact_category_mail' => $input['contact_category_mail'],
            'contact_category_skype' => $input['contact_category_skype'],
        ]);
        return $contact;
    }
}
