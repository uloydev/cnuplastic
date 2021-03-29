<h6>FAQ</h6>
<h3>Have any question?</h3>
<div class="menu1">
    @foreach ($headers as $menu)
        <a href="{{ $menu['url'] }}" class="text-secondary">{{ $menu['text'] }}</a>
    @endforeach
</div>