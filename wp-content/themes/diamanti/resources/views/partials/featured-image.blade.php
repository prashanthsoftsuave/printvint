@if ( has_post_thumbnail() )
    {{ the_post_thumbnail( $size ?? 'medium', ['class' => 'img-fluid']) }}
@endif
