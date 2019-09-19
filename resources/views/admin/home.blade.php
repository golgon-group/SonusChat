@extends('admin.app')

@section('content')
<div class="container"></div>

<h2>Your log in: {{Auth::user()->name}}</h2>
</div>
@endsection
