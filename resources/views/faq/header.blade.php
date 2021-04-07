<h6>FAQ</h6>
<h3>Have any question?</h3>
<div class="menu1">
    @foreach ($headers as $menu)
        <a href="{{ $menu['url'] }}" 
        class="{{ request()->path() == trim(substr(parse_url($menu['url'], PHP_URL_PATH), 1)) ? 'active' : '' }}">
            {{ $menu['text'] }}
        </a>
    @endforeach
</div>