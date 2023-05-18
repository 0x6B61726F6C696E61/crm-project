<div>

<div class='container mt-5'>
    <table class="table">
        <thead>
          <tr>
            <th>Nazwa</th>
            <th>Adres</th>
            <th>Strona internetowa</th>
            <th>Numer telefonu</th>
            <th>Adres e-mail</th>
            <th>Opcje</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($all_contacts as $contact)
                <tr>
                    <th scope="row">
                        {{ $contact->id}}
                    </th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->website}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton_{{$contact->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                              Opcje
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1_{{$contact->id}}">
                              <li>
                                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$contact->id}}">
                                    Usun
                                </button>
                                </li>
                            </ul>
                          </div>
                    </td>
                </tr>

                <!-- Modal -->
<div class="modal fade" id="exampleModal_{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel_{{$contact->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel_{{$contact->id}}">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Czy chcesz usunac kontakt o ID = {{ $contact->id}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
          @endforeach
        </tbody>
      </table>
{{-- <table class="table table-striped table-bordered">
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
                <div class="dropdown_{{$contact->id}}">
                    <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown_{{ $contact->id}}">
                      ...
                    </button>
                    <ul class="dropdown-menu">
                      <li><button class='btn btn-default text-danger' data-bs-toggle="modal" data-bs-target="#destroyModal_{{$contact->id}}">usuń</button></li>
                    </ul>



            </td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->address}}</td>
            <td>{{$contact->website}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->email}}</td>
            
        </tr>

    @endforeach
</table> --}}
<button class='btn btn-primary btn-large float-end' wire:click='create_contact'>Dodaj kontakt</button>
</div>





</div>

 {{--MODALS--}}
 {{-- <div class="modal fade" id="destroyModal_{{$contact->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title">Czy na pewno chcesz usunąć ten kontakt? O ID = {{ $contact->id }}</h4>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-start" data-bs-dismiss="modal" wire:click="destroy_contact({{$current_id}})">Tak</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Nie</button>
            </div>
                    
        </div>
    </div>
</div> --}}
{{--MODAL--}}
       