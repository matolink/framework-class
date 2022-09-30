@extends('layouts.layout')
@section('content')
<section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>Simplemente tus gustos</h1>
                <hr>
                <img src="images/writing_person.png" alt="Writing person" class="img-fluid rounded">

                <p class="text-left mt-3 post-txt">
                </p>
                <p class="text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eaque nemo accusantium libero hic repellat corporis assumenda
                    debitis adipisci modi expedita inventore vel excepturi,
                    facere animi accusamus? Voluptatem ab ad harum?
                </p>
                <p class="text-left post-txt"><i>Registra tu contenido favorito sin publicidad ni otros distractores</i></p>
            </div>
        <div class="col-md-7 text-center">
                <a class="btn  btn-lg btn-block" href="{{url('/login')}}">Ingresar</a>
            </div>
        </div>
    </section>
    </section>
@endsection
 
