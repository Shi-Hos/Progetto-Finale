<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center mt-5">LAVORA CON NOI</h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-start bg-primary">
            <div class=" col-12 col-md-8 my-5">
                <h2>Lavora come admin</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident earum alias iure doloribus. Maxime, quidem.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-end bg-danger">
            <div class=" col-12 col-md-8 my-5 text-end bg-primary">
                <h2>Lavora come admin</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident earum alias iure doloribus. Maxime, quidem.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center bg-warning">
            <div class="  col-12 col-md-8 my-5">
                <h2>Lavora come admin</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident earum alias iure doloribus. Maxime, quidem.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Scegli qui</option>
                                <option value="admin">Admin</option>
                                <option value="revisor">Revisore</option>
                                <option value="writer">Writer</option>
                            </select>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Parlaci di te</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Raccontaci la tua storia, descriviti come persona e perchè dovremmo assumerti">{{old('message')}}</textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-info text-white">Invia candidatura</button>
                            </div>
                    </div>
                </form>


            </div>
        </div>
    </div>



</x-layout>