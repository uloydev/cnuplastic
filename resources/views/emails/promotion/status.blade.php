@component('mail::message')
# Product Promotion Request

<h3>Product</h3>
<pre>
    name : {{ $promotion->product->name }}
    price : Rp. {{ $promotion->product->price }}
    category : {{ $promotion->product->productCategory->name }}
</pre>

<p>Your product promotion request is 
    @if ($promotion->status == 'accepted')
    <b style="color:green">Accepted</b>
    @elseif($promotion->status == 'rejected')
    <b style="color:red">Rejected</b>
    @endif
    By Admin
</p>
@component('mail::button', ['url' => route('seller.promotion.show', $promotion->id)])
Go to Promotion Request Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
