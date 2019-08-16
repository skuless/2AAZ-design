<form class="animated zoomIn delay-1s" method="POST" action="{{ route('formulaire.validateForm') }}" id="selectForm" autocomplete="off">
    <!-- Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application. -->
    @csrf
    <p>
        Toutes les demandes de contact seront traitées le plus rapidement possible
    </p>
    <div class="formDesign">
        <label for="lastname">Nom <span class="inevitably">*</span></label>
        <input type="text" name="lastname" id="lastname" placeholder="......" required>
    </div>
    <div class="formDesign">
        <label for="city">Ville <span class="inevitably">*</span></label>
        <input type="text" name="city" id="city" placeholder="......" required>
    </div>
    <div class="formDesign">
        <label for="phone">Téléphone <span class="inevitably">*</span></label>
        <input type="text" name="phone" id="phone" placeholder="......" required>
    </div>
    <div class="selectSujet">
        <small>Sujet de votre demande de contact</small>
        <select name="sujet" id="sujet" required>
            <option>--------</option>
            <option value="veranda">Véranda</option>
            <option value="pergola">Pergola</option>
            <option value="store">Store</option>
            <option value="terrasse">Terrasse</option>
        </select>
    </div>

    <div class="checkCondition">
        <label for="condition"></label>
        <input type="checkbox" name="condition" id="condition" required>
        <small>J'accepte que mes données soient transmises et utilisées pour répondre à ma demande lors de l'envoie du formulaire.</small>
        <small>Les données enregistrées suite au formulaire seront supprimées après traitement, pour toute demande de suppression veuillez envoyer un mail à cette adresse : contact@2aaz.fr</small>
    </div>

    <div class="button">
        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </div>

    <!-- Check type of form on the page -->
    <input type="hidden" name="typeOfForm" value="contact">
</form>
