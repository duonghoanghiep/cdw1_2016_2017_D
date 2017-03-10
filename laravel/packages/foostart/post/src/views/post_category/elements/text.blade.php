<!-- SAMPLE NAME -->
<div class="form-group">
    <?php $post_category_name = $request->get('post_titlename') ? $request->get('post_name') : @$post->post_category_name ?>
    {!! Form::label($name, trans('post::post_admin.name').':') !!}
    {!! Form::text($name, $post_category_name, ['class' => 'form-control', 'placeholder' => trans('post::post_admin.name').'']) !!}
</div>
<!-- /SAMPLE NAME -->