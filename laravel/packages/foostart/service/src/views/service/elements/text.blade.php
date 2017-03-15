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
    <!-- SERVICE NAME -->
    <?php $service_title = $request->get('service_titlename') ? $request->get('service_title') : @$service->service_title ?>
    {!! Form::label($title, trans('service::service_admin.title').':') !!}
    {!! Form::textarea($title, $service_title, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.title').'']) !!}
    <!-- /SERVICE NAME -->
    
    <!-- SERVICE ND -->
    <?php $service_nd = $request->get('service_titlename') ? $request->get('service_nd') : @$service->service_nd ?>
    {!! Form::label($nd, trans('service::service_admin.nd').':') !!}
    {!! Form::textarea($nd, $service_nd, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.nd').'']) !!}
    <!-- /SERVICE ND -->
</div>
