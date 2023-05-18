<div>

<div class='container mt-5'>
<table class="table table-striped table-bordered">
    <tr>
        <th></th>
        <th>Nazwa</th>
        <th>Adres</th>
        <th>Strona internetowa</th>
        <th>Numer telefonu</th>
        <th>Adres e-mail</th>
    </tr>
    @foreach ($all_contacts as $contact)
        <tr>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
                      ...
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-success" href="#">edytuj</a></li>
                      {{--<li><a class="dropdown-item text-danger" href="#" data-toggle="modal">usuń</a></li>--}}
                      <li><button class='btn btn-default text-danger' data-bs-toggle="modal" data-bs-target="#destroyModal">usuń</button></li>
                    </ul>
            </td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->address}}</td>
            <td>{{$contact->website}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->email}}</td>
            
        </tr>
    @endforeach
</table>
<button class='btn btn-primary btn-large float-end' wire:click='create_contact'>Dodaj kontakt</button>
</div>

{{--MODALS--}}
<div class="modal fade" id="destroyModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Czy na pewno chcesz usunąć ten kontakt?</h4>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger float-start" data-bs-dismiss="modal" wire:click='destroy_contact'>Tak</button>
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Nie</button>
        </div>
  
      </div>
    </div>
  </div>



</div>