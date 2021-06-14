@extends('Admin.layout.main-log')

@section('title', 'Login Admin TI')

@section('content')

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                    </div>
                                    
                                    <form action="{{route('login')}}" method="post" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Input Email Address....">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
@endsection
