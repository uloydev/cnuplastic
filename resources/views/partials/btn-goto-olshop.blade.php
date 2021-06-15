@php
    switch ($olshop) {
        case 'shopee':
        $classBtn = 'orange';
        $link = $product->link_shopee;
        break;

    case 'bukalapak':
        $classBtn = 'danger';
        $link = $product->link_bukalapak;

        break;
    case 'lazada':
        $classBtn = 'primary';
        $link = $product->link_lazada;

        break;

    case 'instagram':
        $classBtn = 'info';
        $link = $product->link_instagram;

        break;
    }
@endphp

<div class="col-md-6">
    <a href="{{ $link }}" target="_blank"
    class="text-white fw-bold btn btn-{{ $classBtn }} d-block">
        go to {{ $olshop }}
    </a>
</div>