<div role="alert" 
@if(isset($isDismissable) and $isDismissable)
{{ $attributes->merge([
    'class' => 'alert alert-' . $type . ' alert-dismissible fade show'
]) }}
@else
{{ $attributes->merge([
    'class' => 'alert alert-' . $type 
]) }}
@endif>
    @if (isset($message))
    <p class="m-0">{{ $message }}</p>
    @else
    {{ $slot }}
    @endif
    @if (isset($isDismissable) and $isDismissable)
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    @endif
</div>