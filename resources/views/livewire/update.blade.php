{{--
<div class='container-fluid'>

    <form wire:submit.prevent="update" class='form-group' id='update_contact'>
        <input type="text" wire:model.lazy='new_name' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowa nazwa...'>
        @error('new_name') <span class="error">{{ $message }}</span> @enderror
        <br>
      
        <input type="text" wire:model.lazy='new_address' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowy adres...'>
        @error('new_address') <span class="error">{{ $message }}</span> @enderror
        <br>

        <input type="text" wire:model.lazy='new_phone' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowy numer telefonu...'>
        @error('new_phone') <span class="error">{{ $message }}</span> @enderror
        <br>

        <input type="text" wire:model.lazy='new_email' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowy adres e-mail...'>
        @error('new_email') <span class="error">{{ $message }}</span> @enderror
        <br>

        <input type="text" wire:model.lazy='new_website' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowa strona internetowa...'>
        @error('new_website') <span class="error">{{ $message }}</span> @enderror
        <br>

        <br>

    </form>
    <button type="submit" class='btn btn-success' form='update_contact'>Edytuj</button>
    <button class='btn btn-secondary' wire:click='go_back'>Strona główna</button>

</div>
--}}

<div class=''>
    <div class='container-fluid bg-primary text-white p-2'>
        <h4 class='display-6 ms-2'>Edytuj kontakt</h4>
    </div>

    <br>

    <div class='container float-start mt-5'>

    <form wire:submit.prevent="update">
        <div class="row">
            <div class="col">
                <input type='text' placeholder='Nazwa...' wire:model.lazy='new_name' class='shadow rounded form-control'>
            </div>
            @error('new_name') <span class="error">{{ $message }}</span> @enderror


            <div class="col">
                <input type='text' placeholder='Adres...' wire:model.lazy='new_address' class='shadow rounded form-control'>
            </div>

        </div>

    <br>

    <div class="row">
        <div class="col">
            <input type='text' placeholder='Telefon...' wire:model.lazy='new_phone' class='shadow rounded form-control'>
            @error('new_phone') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col">
            <input type='text' placeholder='Email...' wire:model.lazy='new_email' class='shadow rounded form-control'>
            @error('new_email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col">
            <input type='text' placeholder='Strona internetowa...' wire:model.lazy='new_website' class='shadow rounded form-control'>
            @error('new_website') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

        <br>
        <br>

        <div class='float-end'>
        <button type="submit" class='btn btn-primary'>Edytuj kontakt</button>
        <button wire:click='go_back' class='btn btn-secondary'>Strona główna</button>
        </div>

    </form>
    </div>

</div>

