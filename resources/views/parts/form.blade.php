@php
   if (isset($edit) && !empty($edit)) {
      $title='Edit this Game';
      $method='PUT';
      $destination=route('games.update',['game' => $game]);
   }else {
     $title='Create a new Game';
     $method='POST';
     $destination=route('games.store');
   };
@endphp

<h2>{{$title}}</h2>
<form action="{{$destination}}" method="post">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="input-name">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="input-name"  placeholder="Enter name" name="name" value="{{$edit ? $game->name : '' }}">
        <div class="invalid-feedback">
            Please choose a game name.
        </div>
    </div>
    <div class="form-group">
        <label for="input-description">description</label>
        <input type="text" class="form-control  {{ $errors->has('description') ? 'is-invalid' : ''}}" id="input-description"  placeholder="Enter description" name="description" value="{{$edit ? $game->description : '' }}">
        <div class="invalid-feedback">
            Please choose a valid description.
        </div>
    </div>
    <div class="form-group">
        <label for="input-console">console</label>
        <input type="text" class="form-control  {{ $errors->has('console') ? 'is-invalid' : ''}}" id="input-console"  placeholder="Enter console" name="console" value="{{$edit ? $game->console : '' }}">
        <div class="invalid-feedback">
            Please choose a valid console.
        </div>
    </div>
    <div class="form-group">
        <label for="input-price">price</label>
        <input type="text" class="form-control  {{ $errors->has('price') ? 'is-invalid' : ''}}" id="input-price"  placeholder="Enter price" name="price" value="{{$edit ? $game->price : '' }}">
        <div class="invalid-feedback">
            Please choose a valid price.
        </div>
    </div>
    <div class="form-group">
        <label for="input-cover">cover</label>
        <input type="text" class="form-control  {{ $errors->has('cover') ? 'is-invalid' : ''}}" id="input-cover"  placeholder="Enter cover" name="cover" value="{{$edit ? $game->cover : '' }}">
        <div class="invalid-feedback">
            Please choose a valid cover.
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/games" class="btn btn-primary">Return</a>
</form>
