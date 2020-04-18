<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://app.agorakit.org/logo/favicon.png">

    <title>Agorakit, open source groupware for collectives</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" integrity="sha256-CuUPKpitgFmSNQuPDL5cEfPOOJT/+bwUlhfumDJ9CI4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../agorakit.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-5064588-5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-5064588-5');
    </script>



</head>

<body>


    <?php include('nav.php') ?>



    <div class="container my-5">

        <h1 class="text-center mb-5" id="hebergement">Hébergement</h1>

        <div class="card-deck mb-3 text-center align-self-stretch">


            <div class="pricing-card card mb-4 shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Prix libre</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">0€ - 20 € <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">

                        <li>Gratuit pour vos tests et les groupes sans revenus</li>
                        <li>Instance partagée</li>
                        <li>Pas de groupe secrets</li>
                        <li>Maximum 3 mb par fichier</li>
                        <li>Accès au groupe de développeurs</li>
                        <li><a href="https://app.agorakit.org" target="_blank">https://app.agorakit.org</a></li>
                    </ul>

                </div>
                <div class="card-footer">
                    <a href="https://app.agorakit.org" type="button" class="btn btn-lg btn-block btn-outline-primary" target="_blank">Inscrivez-vous gratuitement</a>
                </div>

            </div>


            <div class="pricing-card card mb-4 shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Instance standard</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">40€ <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Votre propre instance privée</li>
                        <li>Infogestion complète <br/>(mises à jour et maintenance)</li>
                        <li>Utilisez votre domaine ou sous-domaine</li>
                        <li>Nombre de groupes et d'utilisateurs illimité</li>
                        <li>Stockage de fichiers important</li>
                        <li>Support par mail et téléphone</li>
                        <li>Accès au groupe d'aide et dévelopement</li>
                    </ul>

                </div>

                <div class="card-footer">
                    <a href="mailto:info@agorakit.org" type="button" class="btn btn-lg btn-block btn-primary">Contactez-nous</a>
                </div>

            </div>




            <div class="pricing-card card mb-4 shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Instance de soutien</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">80€ <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Tout ce qu'il y a dans l'instance standard</li>
                        <li>Vous dialoguez avec nous pour décider des prochaines fonctionalités</li>
                        <li>Vous soutenez le projet en finançant 1 heure de développement chaque mois.</li>
                    </ul>

                </div>
                <div class="card-footer">
                    <a href="mailto:info@agorakit.org" type="button" class="btn btn-lg btn-block btn-primary">Contactez-nous</a>
                </div>
            </div>
        </div>

    </div>


    <div class="container my-5 d-flex justify-content-center">
        <div class="col-9">

            <h1 class="text-center mb-5">Hébergez vous même / Développements spécifiques</h1>

            <div class="card-deck mb-3 text-center align-self-stretch">


                <div class="pricing-card card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Hébergez vous même</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">0€ <small class="text-muted">/ mois</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Aucune limite</li>
                            <li>Pas de version "freemium" ou d'édition "pro"</li>
                            <li><strong>Vous gérez tout vous même</strong></li>
                            <li>Licence GPL (open source)</li>
                            <li>Accès au groupe d'aide et de développement</li>
                        </ul>
                    </div>

                    <div class="card-footer">
                        <a href="https://github.com/agorakit/agorakit" type="button" class="btn btn-lg btn-block btn-outline-primary" target="_blank">Téléchargez les sources</a>
                    </div>
                </div>


                <div class="pricing-card card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Développements custom</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">40€ <small class="text-muted">/ heure</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Obtenez des conseils sur votre projet</li>
                            <li>Demandez un devis</li>
                            <li>Le résultat du travail est toujours open source</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="mailto:info@agorakit.org" type="button" class="btn btn-lg btn-block btn-primary">Contactez-nous</a>
                    </div>
                </div>

            </div>

        </div>
    </div>


</body>

</html>
