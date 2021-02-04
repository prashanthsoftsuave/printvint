@php(the_content())

@if($content_blocks)
    @foreach($content_blocks as $block)
        @if(isset($block['view_type']))
            @include('blocks.'.$block['view_type'], array($block['view_type'] => $block))
        @else
            @include('blocks.'.$block['type'], array($block['type'] => $block))
        @endif
    @endforeach
@endif

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
