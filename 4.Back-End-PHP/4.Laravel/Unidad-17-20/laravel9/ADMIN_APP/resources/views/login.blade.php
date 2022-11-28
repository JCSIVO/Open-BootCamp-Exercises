@extends('panel.generals.baselogin')

@section('main')
    <div class="container py-5">
        @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form method="POST" action="{{ route('login') }}" autocomplete="off" >
                    @csrf
                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <input class="form-control" type="email" name="email" placeholder="Correo Electronico" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                    <button class="btn btn-info">Acceder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
