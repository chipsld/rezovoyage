 @extends('layouts.admin')

 @section('form')


    <a class="btn waves-effect waves-light" type="submit" name="action" href="{{route('admin_voyages')}}">RETURN
    <i class="material-icons right">keyboard_backspace</i>
  </a>

  <div class="row">
    <form class="col s12" method="POST" action="{{ route('addVoyage') }}">

      @csrf 
      <div class="row">
        <div class="input-field col s6">
          <input  name="destination" type="text" class="validate">
          <label for="destination">Destination</label>
        </div>
        <div class="input-field col s6">
          <input name="description" type="text" class="validate">
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="prix" type="number" class="validate">
          <label for="prix">Prix</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="titre" type="text" class="validate">
          <label for="titre">Titre</label>
        </div>
      </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">
      <i class="material-icons right">send</i>
    </button>
    </form>
  </div>

  

@endsection