@if(session()->has('message'))
<div class="fixed-top text-success">
    <p>{{session('message')}}</p>
</div>
@endif