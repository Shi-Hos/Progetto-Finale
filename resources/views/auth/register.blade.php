<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center">REGISTRATI</h1>
            </div>
        </div>
    </div>





    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3 mt-5">
          <label class="form-label">INDIRIZZO EMAIL</label>
          <input type="email" class="form-control" name=email>
        </div>
        <div class="mb-3">
            <label class="form-label">USERNAME</label>
            <input type="text" class="form-control" name=name>
          </div>
        <div class="mb-3">
          <label class="form-label">PASSWORD</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">CONFERMA PASSWORD</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        <button type="submit" class="btn btn-primary">REGISTRATI</button>
      </form>
        </div>
    </div>
</div>

























</x-layout>