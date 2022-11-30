@extends('layouts.layout')
@section('title', 'Inicio')

@section('content')
<div class="container-fluid content">
    <div class="row justify-content-center">
        <!-- <div class="card mb-3" style="max-width: 540px;"> -->
        <!--   <div class="row g-0"> -->
        <!--     <div class="col-md-4"> -->
        <!--       <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
        <!--     </div> -->
        <!--     <div class="col-md-8"> -->
        <!--       <div class="card-body"> -->
        <!--     <h5 class="card-title">Blade runner (1982)</h5> -->
        <!--     <h5 class="card-title">Fecha: 30-09-22</h5> -->
        <!--     <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
        <!--     <p class="card-text">Rating 3.5</p> -->
        <!--     <a href="#" class="btn btn-primary">Delete</a> -->
        <!--     <a href="#" class="btn btn-primary">Edit</a> -->
        <!--     <a href="#" class="btn btn--primary">Share</a> -->
        <!--       </div> -->
        <!--     </div> -->
        <!--   </div> -->
        <!-- </div> -->
        @foreach ($entries as $entry)
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{$entry ->image}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
            <h5 class="card-title">{{$entry->name}}</h5>
            <h5 class="card-title">Fecha de Estreno: {{$entry->release_date}}</h5>
            <p class="card-text">Agregada la fecha:{{$entry->date_added}}</p>
            <p class="card-text">{{$entry->summary}}</p>
            <p class="card-text">Rating {{$entry->rating}}</p>
            @if($user == 0)
            <a href="{{ url('/edit/'.$entry->id) }}" class="btn btn-primary">Edit</a>
            <form action = "{{ url('/delete/'.$entry->id) }}" class = "d-inline formulario-eliminar">                     
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-primary ">Delete</button> 
           </form>
            @endif
            <a href="#" class="btn btn--primary">Share</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <!-- <div class="row justify-content-center"> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!-- </div> -->
    <!-- <div class="row justify-content-center"> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--     <div class="card mb-3" style="max-width: 540px;"> -->
    <!--       <div class="row g-0"> -->
    <!--         <div class="col-md-4"> -->
    <!--           <img src="{{asset('images/br.jpg')}}" class="img-fluid rounded-start" alt="..."> -->
    <!--         </div> -->
    <!--         <div class="col-md-8"> -->
    <!--           <div class="card-body"> -->
    <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
    <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
    <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement...</p> -->
    <!--         <a href="#" class="btn btn-primary">Rate</a> -->
    <!--         <a href="#" class="btn btn-primary">Delete</a> -->
    <!--         <a href="#" class="btn btn--primary">Share</a> -->
    <!--           </div> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!-- </div> -->
        <!-- <div class="col-md-4"> -->
        <!--     <div class="card" > -->
        <!--       <img src="{{asset('images/br.jpg')}}" class="card-img-top w-auto " alt="..." style="height: 400px"> -->
        <!--       <div class="card-body"> -->
        <!--         <h5 class="card-title">Blade runner (1982)</h5> -->
        <!--         <h5 class="card-title">Fecha: 30-09-22</h5> -->
        <!--         <p class="card-text">In a dystopian 2019 Los Angeles of towering skyscrapers, the grizzled former Blade Runner, Rick Deckard, is called out of retirement when four rogue Nexus-6 replicants steal a spaceship and illegally enter Earth to find their creator, Dr Eldon Tyrell. As the synthetic humanoids become increasingly desperate to locate him, the officious bounty ...</p> -->
        <!--         <a href="#" class="btn btn-primary">Rate</a> -->
        <!--         <a href="#" class="btn btn-primary">Delete</a> -->
        <!--         <a href="#" class="btn btn--primary">Share</a> -->
        <!--       </div> -->
        <!--     </div>         -->
        <!-- </div> -->
</div>
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    @if(session('delete') == 'ok')
        <script>
            Swal.fire(
                    '¡Eliminado!',
                    'El registro ha sido eliminado correctamente',
                    'success'
                    )
        </script>
    @endif   
        <script> 
            $('.formulario-eliminar').submit(function(e){
                e.preventDefault();
                
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás volver atrás!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, ¡eliminar!',
                    cancelButtonText: 'Cancelar',
                    }).then((result) => {
                    if (result.isConfirmed) { 

                        this.submit();
                    }
                })

            });
        </script>
@endsection
