@include('header')
<h1>Hello laravel</h1>
@php
    $name="Thein Thein Soe";
    $users=null;

    $age=56;

    $gender="male";
@endphp

<h1>{{ $name }}</h1>

{{-- <ul>
    @for ($i=0;$i<count($users);$i++)
        <li>{{ $users[$i] }}</li>
    @endfor
</ul> --}}
@isset($users)
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endisset

@empty($users)
    <h1>There is no users</h1>
@endempty


@if ($age<18)
    <h1>He is child</h1>
@elseif ($age >= 18 && $age<=30)
    <h1>He is adult</h1>
@else
    <h1>He is older man</h1>
@endif

@switch($gender)
    @case("male")
        <h1>He is man</h1>
        @break
    @case("female")
        <h1>She is woman</h1>
    @break
    @default
        <h1>Unknown</h1>

@endswitch
