<div>

    <div class='row mt-3'>
        <form wire:submit.prevent='search'>
        <div class="col">
            <input class="rounded form-control w-50 float-start" type='text' wire:model.lazy='input_value' placeholder="Szukaj..." >
        </div>
        <div class="col">
            <button type='submit' class='btn btn-success float-start w-auto ms-1'>Szukaj</button>
        </div>
        </form>
    </div>

<div class='container mt-5'>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
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
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton_{{$contact->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                                ...
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1_{{$contact->id}}">
                              <li>
                                <button type="button" class="dropdown-item text-success" wire:click="edit_contact({{$contact->id}})">
                                    Edytuj
                                </button>

                                <li><hr class="dropdown-divider"></li>

                                <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$contact->id}}">
                                    Usuń
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
          <h5 class="modal-title" id="exampleModalLabel_{{$contact->id}}">Czy na pewno chcesz usunąć kontakt?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        {{--
        <div class="modal-body">
          Czy chcesz usunac kontakt o ID = {{ $contact->id}}?
        </div>
        --}}

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Nie</button>
          <button type="button" class="btn btn-danger" wire:click='destroy_contact({{$contact->id}})'>Tak</button>
        </div>
      </div>
    </div>
  </div>
          @endforeach
        </tbody>
      </table>

      <br>



<button class='btn btn-primary btn-large float-end' wire:click='create_contact'>Dodaj kontakt</button>
</div>





</div>
       