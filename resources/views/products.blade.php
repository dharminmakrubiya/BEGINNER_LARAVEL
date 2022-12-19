
<h1>
    All Products
</h1>



@foreach ($data as $item)
    {{$item}}<br>
@endforeach



{{-- If Else Blade syntext --}}
@if (count($data) === 1)
    I have one record!
@elseif (count($data) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif