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
            <td>edytuj</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->address}}</td>
            <td>{{$contact->website}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->email}}</td>
        </tr>
    @endforeach
</table>
<button class='btn btn-primary btn-large float-end'>Dodaj kontakt</button>
</div>



</div>