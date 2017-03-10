<!-- SAMPLE NAME -->
<div class="form-group">
    <?php $contact_category_name = $request->get('contact_titlename') ? $request->get('contact_name') : @$contact->contact_category_name ?>
    {!! Form::label($name, trans('contact::contact_admin.name').':') !!}
    {!! Form::text($name, $contact_category_name, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.name').'']) !!}
    
    <?php $contact_category_cv = $request->get('contact_titlename') ? $request->get('contact_cv') : @$contact->contact_category_cv ?>
    {!! Form::label($cv, trans('contact::contact_admin.cv').':') !!}
    {!! Form::text($cv, $contact_category_cv, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.cv').'']) !!}
    
    <?php $contact_category_sdt = $request->get('contact_titlename') ? $request->get('contact_sdt') : @$contact->contact_category_sdt ?>
    {!! Form::label($sdt, trans('contact::contact_admin.sdt').':') !!}
    {!! Form::text($sdt, $contact_category_sdt, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.sdt').'']) !!}
    
    <?php $contact_category_mail = $request->get('contact_titlename') ? $request->get('contact_mail') : @$contact->contact_category_mail ?>
    {!! Form::label($mail, trans('contact::contact_admin.mail').':') !!}
    {!! Form::text($mail, $contact_category_mail, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.mail').'']) !!}
    
    <?php $contact_category_skype = $request->get('contact_titlename') ? $request->get('contact_skype') : @$contact->contact_category_skype ?>
    {!! Form::label($skype, trans('contact::contact_admin.skype').':') !!}
    {!! Form::text($skype, $contact_category_skype, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.skype').'']) !!}
    
</div>
<!-- /SAMPLE NAME -->