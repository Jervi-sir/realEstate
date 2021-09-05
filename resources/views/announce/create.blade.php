<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form class="mx-5" action="{{ route('announce.store') }}" method="POST">
        @csrf
        <!-- name -->
        <div class="mb-3">
            <label for="name" class="form-label">Announce name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="appartement f3">
        </div>
        <!-- type -->
        <select name="type" class="form-select" aria-label="type">
            <option selected>Type</option>
            @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
        <!-- price -->
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name="price" type="number" class="form-control" min="0" id="price" >
        </div>
        <!-- wilaya -->
        <select name="wailaya" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($wilayas as $wilaya)
                <option value="{{ $wilaya->number }}">{{ $wilaya->name }}</option>
            @endforeach
        </select>
        <!-- location -->
        <div class="mb-3">
            <label for="location" class="form-label">location</label>
            <input name="location" type="text" class="form-control" id="location" >
        </div>
        <!-- description -->
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <!-- tags -->
        <select name="tags[]" class="form-select" multiple aria-label="multiple select example">
            <option selected>Open this select menu</option>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>