@extends("layouts.admin")

@section("content")
<div class="container py-3">
    
    <div class="row">
        <h1>Insert new Portfolio</h1>
    </div>
    
    {{-- VALIDATION --}}
    {{-- <div class="row">
        <div class="col-6">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    
        </div>
    </div> --}}

    <div class="row">
        <div class="col-6">
            <form action="{{ route("admin.portfolios.store") }}" method="POST">
                {{-- cross scripting request forgery --}}
                @csrf

                {{-- title  --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title") }}">

                    {{-- error message --}}
                    @error("title")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- description  --}}
                <div class="mb-3">
                    <label for="description"  class="form-label">Description</label>
                    <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                </div>
                {{-- img  --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Img</label>
                    <input type="text" class="form-control @error("img") is-invalid @enderror" id="img" name="img" value="{{ old("img") }}">

                    {{-- error message --}}
                    @error("img")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Create</button>
                </form>
        </div>
    </div>
</div>
@endsection
