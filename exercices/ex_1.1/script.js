$(function(){

    $("#inscription_form").validate(
        {
            rules:{
                nom_per:{
                    required: true,
                    minlength: 2
                },
                prenom_per:{
                    required: true,
                    minlength: 2
                },
                email_per:{
                    required: true,
                    email: true
                },
                mdp_per:{
                    required: true,
                    minlength: 6
                },
                mdpc_per:{
                    required: true,
                    equalTo: "#mdp_per"
                }
            },
            messages:{
                nom_per:{
                    required: "Veuillez saisir votre nom",
                    minlength: "Votre nom doit être composé de 2 caractères au minimum"
                },
                prenom_per:{
                    required: "Veuillez saisir votre prénom",
                    minlength: "Votre prénom doit être composé de 2 caractères au minimum"
                },
                email_per:{
                    required: "Veuillez saisir votre email",
                    email: "Votre adresse e-mail doit avoir le format suivant : name@domain.com"
                },
                mdp_per:{
                    required: "Veuillez saisir votre mot de passe",
                    minlength: "Votre mot de passe est trop court"
                },
                mdpc_per:{
                    required: "Veuillez saisir une deuxième fois votre mot de passe",
                    equalTo: "Les mots de passe ne sont pas identiques"
                }
            }
        }
    );

});