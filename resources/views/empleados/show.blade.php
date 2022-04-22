@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="d-flex justify-content-between align-items-end mb-3">
                <h1 class="pb-1">{{ $title }}</h1>
            </div>
            @if (!empty($id))
            <div class="table-responsive-lg">
                <table class="table table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="sort-desc">Nombre <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Email <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Position <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Salary <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Phone <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Address <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                        <th scope="col" class="sort-desc">Skills <span class="oi oi-caret-bottom"></span><span class="oi oi-caret-top"></span></th>
                    </tr>
                    <tr>
                        @foreach($valor as $valo)
                            @if($valo['position']==$id)
                                <td>{{$valo['name']}}</td>
                                <td>{{$valo['email']}}</td>
                                <td>{{$valo['position']}}</td>
                                <td>{{$valo['salary']}}</td>
                                <td>{{$valo['phone']}}</td>
                                <td>{{$valo['address']}}</td>
                                <td>{{$valo['skills']}}</td>
                            @endif
                        @endforeach
                    </tr>
                    </thead>
                </table>
                <div class="form-group mt-4">
                    <a href="{{ route('empleados.index') }}" class="btn btn-outline-secondary btn-sm">Regresar al listado de usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
    @else
        <p>valor incorrrecto o nulo</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection