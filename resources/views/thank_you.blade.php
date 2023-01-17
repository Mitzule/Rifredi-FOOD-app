@extends('layouts.main')

@section('content')

</div>

<section class="container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
        <h4>Thank you</h4>

        @if(Session::has('order_id') && Session::get('order_id') != null)
            <h4 style="color:blue" class="my-5"> Order id: {{Session::get('order_id')}}</h4>

            <p>
                Please keep order id in safe place fo future reference </p>
       
        @endif
    </div>
</section>

@endsection