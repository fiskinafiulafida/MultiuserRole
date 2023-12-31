@extends('operator.index')

@section('title', 'Profile User')

@section('container')
<div class="card shadow mb-4">
    <center>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hallo, {{ Auth::user()->name }}</h6>
        </div>
    </center>
    <div class="card-body">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="{{ Storage::url('public/image/{{ Auth::user()->gambarProfile') }}" class="rounded" style="width: 100px">
                        </div>
                        <div class=" col-md-8">
                            <div class="card-body p-4">
                                <h6>Information User</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Name</h6>
                                        <p class="text-muted">{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('profile.edit', Auth::user()->id) }}" class="fa fa-edit" style="font-size:20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection