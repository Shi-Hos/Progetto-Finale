<x-layout>
    
  
  <img src="sfondoart.jpg" alt="#">

  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet distinctio, nulla reprehenderit expedita eligendi dignissimos. Perspiciatis ullam modi iusto rem. Assumenda vel ducimus aliquid harum aut est laboriosam eaque rerum!
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quae molestias, reprehenderit natus, ut veniam fugiat quisquam esse consequuntur ea dolore iste officia eius excepturi perspiciatis unde quod ad cupiditate?

 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates dolore rerum neque, alias rem officia atque in distinctio. Blanditiis recusandae a repellat ducimus, doloribus illum impedit. Porro accusantium blanditiis atque?
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus esse recusandae quo exercitationem repudiandae qui laborum reiciendis, aliquid, ipsam quae expedita, quas molestiae aliquam earum. Vel et quisquam quaerat quibusdam?






    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">ECCO IL TUO ARTICOLO</h1>
              </fieldset>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-3">
                <x-cardshow :article='$article'></x-cardshow>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Riufiuta articolo</a>
                    
                @endif
            </div>
        </div>
    </div>
    



</x-layout>

