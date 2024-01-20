@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Homepage</h1>
        </div>

        <div class="section-body">
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="active"><a class="nav-link" href="blank.html"><i class="far fa-square"></i>
            <span>Blank Page</span></a></li>
@endsection
