<div class="col-md-4 col-lg-3 bg-light sidebar my-4">
    <div class="px-4 pt-3 fw-bold">
        <img src="{{asset('image/dot.png')}}" class="me-3" width="30px" 
        alt="{{ config('app.name') . " $catalogName" }}">
        <span class="align-middle">{{ ucfirst($catalogName) }} Category</span>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route($catalogName . '.index') }}" 
            class="nav-link {{ !request()->has('cat') ? 'active text-white' : 'text-dark' }}">
                All
            </a>
        </li>
        @foreach ($categories as $category)
            <li class="nav-item">
                <a href="{{ route($catalogName . '.index', ['cat' => $category->id]) }}" class="nav-link link-dark 
                {{ request()->cat == $category->id ? 'active' : '' }} rounded-0">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>