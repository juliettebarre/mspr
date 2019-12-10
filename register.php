<?php require_once 'includes/header.php'; ?>

    <section>

        <div class="container text-center mt-5">

            <h2> Créer un compte </h2>

            <form class="mx-auto mt-5"  style="max-width: 500px">

                <div class="form-group">
                    <input type="Nom" class="form-control" id="exampleFormControlInput1" placeholder="votre Nom">
                </div>

                <div class="form-group">
                    <input type="Prénom" class="form-control" id="exampleFormControlInput1" placeholder="votre Prénom">
                </div>

                <div class="form-group">
                    <input type="Numéro de mobile ou email" class="form-control" id="exampleFormControlInput1" placeholder="Numéro de mobile ou email">
                </div>

                <div class="form-group">
                    <input type="Nouveau mot de passe" class="form-control" id="exampleFormControlInput1" placeholder="Nouveau mot de passe">
                </div>


                <div class="form-group">
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
                </div>

                <div class="form-group">
                    <select class="form-control form-control-sm">
                        <option>Homme</option>
                        <option>Femme</option>
                        <option>Non spécifié</option>
                    </select>
                </div>

                <button type="button" class="btn btn-success btn-lg">Inscription</button>


            </form>

        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>