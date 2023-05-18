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
