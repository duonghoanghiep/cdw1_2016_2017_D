<head>
  <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: 'textarea',  // change this value according to your HTML
  plugin: 'a_tinymce_plugin',
  a_plugin_option: true,
  a_configuration_option: 400
  });
  </script>
</head>
<div class="form-group">
    <!-- CONTACT NAME -->
    <?php $contact_category_name = $request->get('contact_titlename') ? $request->get('contact_name') : @$contact->contact_category_name ?>
    {!! Form::label($name, trans('contact::contact_admin.name').':') !!}
    {!! Form::textarea($name, $contact_category_name, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.name').'']) !!}
    <!-- /CONTACT NAME -->
    
    <!-- CONTACT CONG VIEC -->
    <?php $contact_category_cv = $request->get('contact_titlename') ? $request->get('contact_cv') : @$contact->contact_category_cv ?>
    {!! Form::label($cv, trans('contact::contact_admin.cv').':') !!}
    {!! Form::textarea($cv, $contact_category_cv, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.cv').'']) !!}
    <!-- /CONTACT CONG VIEC -->
    
    <!-- CONTACT SDT -->
    <?php $contact_category_sdt = $request->get('contact_titlename') ? $request->get('contact_sdt') : @$contact->contact_category_sdt ?>
    {!! Form::label($sdt, trans('contact::contact_admin.sdt').':') !!}
    {!! Form::textarea($sdt, $contact_category_sdt, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.sdt').'']) !!}
    <!-- /CONTACT SDT -->
    
    <!-- CONTACT MAIL -->
    <?php $contact_category_mail = $request->get('contact_titlename') ? $request->get('contact_mail') : @$contact->contact_category_mail ?>
    {!! Form::label($mail, trans('contact::contact_admin.mail').':') !!}
    {!! Form::textarea($mail, $contact_category_mail, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.mail').'']) !!}
    <!-- /CONTACT MAIL -->
    
    <!-- CONTACT SKYPE -->
    <?php $contact_category_skype = $request->get('contact_titlename') ? $request->get('contact_skype') : @$contact->contact_category_skype ?>
    {!! Form::label($skype, trans('contact::contact_admin.skype').':') !!}
    {!! Form::textarea($skype, $contact_category_skype, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.skype').'']) !!}
     <!-- /CONTACT SKYPE -->
</div>
