<div>
    <h3>Dodaj kontakt</h3>

    <form wire:submit.prevent="submit">
        <input type='text' placeholder='Nazwa...' wire:model.lazy='contact_name'>
        @error('contact_name') <span class="error">{{ $message }}</span> @enderror

        <input type='text' placeholder='Adres...' wire:model.lazy='contact_address'>

        <input type='text' placeholder='Telefon...' wire:model.lazy='contact_phone'>
        @error('contact_phone') <span class="error">{{ $message }}</span> @enderror

        <input type='text' placeholder='Email...' wire:model.lazy='contact_email'>
        @error('contact_email') <span class="error">{{ $message }}</span> @enderror

        <input type='text' placeholder='Strona internetowa...' wire:model.lazy='contact_website'>
        @error('contact_website') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class='btn btn-success'>Dodaj kontakt</button>
    </form>

    <button wire:click='go_back'>Strona główan</button>
</div>
