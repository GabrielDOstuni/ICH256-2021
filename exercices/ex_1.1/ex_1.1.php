<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="../../jquery/jquery-3.6.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <title>Cidisi - Games</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="header">

            <h3>Inscription</h3>

        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">

                Inscription au portail de jeux

            </div>
            <div class="panel-body">
                <form id="inscription_form" action="check_1.1.php" method="post">

                    <!-- Nom -->
                    <div class="form-group row">
                        <label for="nom_per" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre nom">
                        </div>

                    </div>

                    <!-- Prenom -->
                    <div class="form-group row">

                        <label for="prenom_per" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="votre prénom">
                        </div>

                    </div>

                    <!-- E-mail -->
                    <div class="form-group row">

                        <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email_per" name="email_per" placeholder="votre e-mail">
                        </div>

                    </div>

                    <!-- MDP -->
                    <div class="form-group row">

                        <label for="mdp_per" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mdp_per" name="mdp_per" placeholder="votre mot de passe">
                        </div>

                    </div>

                    <!-- Confirmation MDP -->
                    <div class="form-group row">

                        <label for="mdpc_per" class="col-sm-2 col-form-label">Mot de passe (confirmation)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mdpc_per" name="mdpc_per" placeholder="Confirmez votre mot de passe">
                        </div>

                    </div>

                    <!-- Formation -->
                    <div class="form-group row">

                        <div class="col-sm-2">
                            <input type="checkbox" class="form-input" id="check_per" name="check_per">
                        </div>
                        <label for="check_per" class="col-sm-4 col-form-label">La formation d'informaticien m'intéresse</label>

                    </div>

                    <!-- S'inscrire - Annuler -->
                    <div class="form-group row">

                        <div class="col-sm-10">
                            <p></p>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary mb-5">S'inscrire</button>
                        </div>
                        <div class="col-sm-1">
                            <button type="reset" class="btn btn-warning mb-5">Annuler</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="panel-footer">

            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
