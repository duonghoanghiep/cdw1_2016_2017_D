
<div class="form-group">
    <!-- CONTACT NAME -->
    <?php $contact_name = $request->get('contact_titlename') ? $request->get('contact_name') : @$contact->contact_name ?>
    {!! Form::label($name, trans('contact::contact_admin.name').':') !!}
    {!! Form::text($name, $contact_name, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.name').'']) !!}
    <!-- /CONTACT NAME -->
    
    <!-- CONTACT CONG VIEC -->
    <?php $contact_cv = $request->get('contact_titlename') ? $request->get('contact_cv') : @$contact->contact_cv ?>
    {!! Form::label($cv, trans('contact::contact_admin.cv').':') !!}
    {!! Form::text($cv, $contact_cv, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.cv').'']) !!}
    <!-- /CONTACT CONG VIEC -->
    
    <!-- CONTACT SDT -->
    <?php $contact_sdt = $request->get('contact_titlename') ? $request->get('contact_sdt') : @$contact->contact_sdt ?>
    {!! Form::label($sdt, trans('contact::contact_admin.sdt').':') !!}
    {!! Form::text($sdt, $contact_sdt, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.sdt').'']) !!}
    <!-- /CONTACT SDT -->
    
    <!-- CONTACT MAIL -->
    <?php $contact_mail = $request->get('contact_titlename') ? $request->get('contact_mail') : @$contact->contact_mail ?>
    {!! Form::label($mail, trans('contact::contact_admin.mail').':') !!}
    {!! Form::text($mail, $contact_mail, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.mail').'']) !!}
    <!-- /CONTACT MAIL -->
    
    <!-- CONTACT SKYPE -->
    <?php $contact_skype = $request->get('contact_titlename') ? $request->get('contact_skype') : @$contact->contact_skype ?>
    {!! Form::label($skype, trans('contact::contact_admin.skype').':') !!}
    {!! Form::text($skype, $contact_skype, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.skype').'']) !!}
    <!-- /CONTACT SKYPE -->
</div>