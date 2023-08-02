<x-layout>
    <x-searchbar/>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
                <h1 class="display-2 text-center">CREA ARTICOLO</h1>
            </div>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags:</label>
            <input name="tags" id="tags" class="form-control" value="{{old('tags')}}">
            <span class="small fst-italic">Dividi ogni tag con una virgola</span>
        </div>
    </div>


    
    <x-article-form></x-article-form>
</x-layout>