
@if( ! $slides->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('sample::slide_admin.order') }}</td>
            <th style='width:10%'>Faq ID</th>
            <th style='width:10%'>Faq Title</th>
            <th style='width:10%'>Faq ND</th>
            <th style='width:20%'>{{ trans('sample::slide_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $slides->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($slides as $slide)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $slide->slide_id !!}</td>
            <td>{!! $slide->slide_title !!}</td>
            <td>{!! $slide->slide_nd !!}</td>
            <td>
                <a href="{!! URL::route('admin_slide.edit', ['id' => $slide->slide_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_slide.delete',['id' =>  $slide->slide_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<span class="text-warning"><h5>No results found.</h5></span>
@endif


