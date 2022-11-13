@extends('template.template')

@section('title', 'Web Programming')

@section('content')

    @forelse ($display as $key => $display)

        @if ($loop->even)
            <b> {{ $key }}. {{ $display['course'] }} </b>
            <div class="position-relative" style="background-color: #E98A02"> Material: {{ $display['material'] }} </div>
            <div class="position-relative" style="background-color: #E98A02"> Code: {{ $display['code'] }} </div>
            <div class="position-relative" style="background-color: #E98A02"> Class: {{ $display['class'] }} </div><br>



        @else
            <b> {{ $key }}. {{ $display['course'] }} </b>
            <div style="background-color: #2492D1"> Material: {{ $display['material'] }} </div>
            <div style="background-color: #2492D1"> Code: {{ $display['code'] }} </div>
            <div style="background-color: #2492D1"> Class: {{ $display['class'] }} </div><br>


        @endif

    @empty
        <p>No data found</p>
    @endforelse



@endsection
