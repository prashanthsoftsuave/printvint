@if (is_single())
    @include('blocks.sidebar-cta', ['sidebar_cta' => $sidebar_cta])
    @php(dynamic_sidebar('sidebar-single'))
@else
    @php(dynamic_sidebar('sidebar-primary'))
@endif
