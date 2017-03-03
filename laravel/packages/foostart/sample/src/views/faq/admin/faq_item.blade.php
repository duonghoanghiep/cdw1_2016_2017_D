
@if( ! $faqs->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('sample::faq_admin.order') }}</td>
            <th style='width:10%'>Faq ID</th>
            <th style='width:10%'>Faq Title</th>
            <th style='width:10%'>Faq ND</th>
            <th style='width:20%'>{{ trans('sample::faq_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $faqs->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($faqs as $faq)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $faq->faq_id !!}</td>
            <td>{!! $faq->faq_title !!}</td>
            <td>{!! $faq->faq_nd !!}</td>
            <td>
                <a href="{!! URL::route('admin_faq.edit', ['id' => $faq->faq_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_faq.delete',['id' =>  $faq->faq_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<span class="text-warning"><h5>No results found.</h5></span>
@endif


