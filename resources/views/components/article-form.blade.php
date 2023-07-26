<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form method="POST" enctype="multipart/form-data" action="{{route('article.store')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">TITOLO</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name=title value="{{old('title')}}">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">DESCRIZIONE</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
        </div>
    </div>
</div>




