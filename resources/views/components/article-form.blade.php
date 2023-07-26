<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form method="POST" enctype="multipart/form-data" action="{{route('article.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">TITOLO</label>
                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name=title value="{{old('title')}}">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="mt-3">SOTTOTITOLO</label>
                    <input name="subtitle" value="{{old('subtitle')}}" type="text" class="form-control @error('subtitle') is-invalid @enderror">
                    @error('subtitle')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="body" class="form-label">DESCRIZIONE</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('body')}}</textarea>
                    @error('body')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">CATEGORIA</label>
                    <select name="category" id="category" cols="30" rows="10" class="form-control text-capitalize">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</div>




