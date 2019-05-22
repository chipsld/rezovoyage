@extends('layouts.admin')

@section('admin_voyages')
<br>
		<a class="btn-floating btn-large waves-effect waves-light blue" href="{{ route('admin_voyages_add')}}"><i class="material-icons">add</i></a>

      <table>
        <thead>
          <tr>
              <th>Destination</th>
              <th>id</th>
              <th>Prix</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>
          @foreach($voyages as $voyage)
            <tr>
              <td>{{$voyage->destination}}</td>
              <td>{{$voyage->id}}</td>
              <td>{{$voyage->prix}}</td>
            <td> <a class="btn-floating btn-large waves-effect waves-light orange" href="{{ route('goToUpdate',['id_voyage'=>$voyage->id])}}"><i class="material-icons">create</i></a></td>
              <td> <a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('deleteVoyage',['id_voyage'=>$voyage->id])}}"><i class="material-icons">delete</i></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
	
@endsection