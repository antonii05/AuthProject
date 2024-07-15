@extends('layouts.Layout',['hasMenu' => true])

@section('body')
    <div class="container mt-5">

        <div class="row text-center justify-content-center">
            {{-- Primera Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            {{-- FIN Primera Col --}}


            {{-- Segunda Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            {{-- FIN Segunda Col --}}

            {{-- Tercera Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            {{-- FIN Tercera Col --}}


        </div>
    </div>
@endsection
