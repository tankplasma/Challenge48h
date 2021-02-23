<form class="" action="/adminAddGames" method="post" enctype="multipart/form-data">

    {{csrf_field()}}
    <div class="row">
        <div class="col form-group" >
            <label>déscription :</label>
            <input type="string" name="gamename" placeholder="Nom du jeu...">
        </div>
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div>
</form>