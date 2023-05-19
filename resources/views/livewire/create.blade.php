<div class=''>
    <div class='container-fluid bg-primary text-white p-2'>
    <h4 class='display-6 ms-2'>Dodaj kontakt</h4>
    </div>

    <br>

    <div class='container float-start mt-5'>

    <form wire:submit.prevent="submit">
        <div class="row">
        <div class="col">
        <input type='text' placeholder='Nazwa...' wire:model.lazy='contact_name' class='shadow rounded form-control'>
        </div>
        @error('contact_name') <span class="error">{{ $message }}</span> @enderror


        <div class="col">
        <input type='text' placeholder='Adres...' wire:model.lazy='contact_address' class='shadow rounded form-control'>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col">
            <input type='text' placeholder='Telefon...' wire:model.lazy='contact_phone' class='shadow rounded form-control'>
            @error('contact_phone') <span class="error">{{ $message }}</span> @enderror
            </div>

        <div class="col">
        <input type='text' placeholder='Email...' wire:model.lazy='contact_email' class='shadow rounded form-control'>
        @error('contact_email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col">
        <input type='text' placeholder='Strona internetowa...' wire:model.lazy='contact_website' class='shadow rounded form-control'>
        @error('contact_website') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

        <br>
        <br>

        <div class='float-end'>
        <button type="submit" class='btn btn-primary'>Dodaj kontakt</button>
        <button wire:click='go_back' class='btn btn-secondary'>Strona główna</button>
        </div>

    </form>
    </div>

</div>
