<form action="{{ route('boxers.store') }}" method="POST" >
    @csrf
   
    {{-- nom --}}
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
    </div>
    {{-- prenom --}}
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
    </div>
    {{-- M/F --}}
    <div class="form-group radio">
        <label><input type="radio" name="sex" value="0" class="form-control" checked>Male</label>
        <label><input type="radio" name="sex" value="1" class="form-control">Femelle</label>
    </div>
    {{-- Date naissance --}}
    <div class="form-group">
        <label for="birth_date">Date de naissance</label>
        <input type="text" class="form-control birth_date" name="birth_date" id="birth_date" placeholder="Date de naissance">
    </div>
    {{-- Poids --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Poids</label>
        <input type="number" class="form-control" name="weight" id="weight" placeholder="Poids">
    </div>

    {{-- Type --}}
    <div class="form-group">
        <label for="types">Type</label>
        <select name="types[]" class="types form-control" multiple>
            <option value="1"> Semi Contact </option>
            <option value="2"> Light Contact </option>
            <option value="3"> Kick Light </option>
            <option value="4"> Thai Light </option>
            <option value="5"> Full Contact </option>
            <option value="6"> Low Kick </option>
            <option value="7"> K-1 </option>
            <option value="8"> Thai Boxing </option>
        </select>
    </div>

    {{-- Adresse --}}
    <div class="form-group">
        <label for="adress">Adresse</label>
        <input type="text" class="form-control" name="adress" id="adress" placeholder="Adresse">
    </div>

    {{-- Phone 1 --}}
    <div class="form-group">
        <label for="phone">Numéro</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Numéro">
    </div>
    
    {{-- Parent Name --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Nom Parent</label>
        <input type="text" class="form-control" id="parent_name" name="parent_name" placeholder="Nom Parent">
    </div>

    {{-- Phone 2 --}}
    <div class="form-group">
        <label for="parent_phone">Numéro Parent</label>
        <input type="text" class="form-control" id="parent_phone" name="parent_phone" placeholder="Numéro Parent">
    </div>

    {{-- boxer_id --}}
    <input type="hidden" class="form-control" id="boxer_id" name="boxer_id">
    
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>