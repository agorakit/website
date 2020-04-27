<?php include('header.php') ?>


<?php include('nav.php') ?>



<div class="container my-5">

    <h1 class="text-center mb-4" id="hebergement">Une plateforme pour toutes et tous</h1>

    <h2 class="text-center mb-5">Option 1 : Agora partagée (votre groupe est hébergé avec d’autres)</h2>

    <div class="card-deck mb-3 text-center align-self-stretch">

        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tarif magique</h4>
            </div>
            <div class="card-body">

                <h1 class="card-title pricing-card-title">0€ <small class="text-muted">/ mois</small></h1>
                <p class="card-text">
                    Si vous n’avez pas les moyens, utilisez gratuitement la plateforme partagée.
                    L'hébergement est assuré gratuitement par <a href="https://alwaysdata.com" target="_blank">Alwaysdata</a> en tant que sponsor de projets open source.
                </p>

            </div>

            <div class="card-footer">
                <a href="https://app.agorakit.org" type="button" class="btn btn-lg btn-block btn-outline-primary" target="_blank">Inscrivez-vous gratuitement</a>
            </div>

        </div>

        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tarif normal</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">10€ <small class="text-muted">/ mois</small></h1>
                <p class="card-text">
                    Vous utilisez régulièrement la plateforme et votre groupe tourne bien? Votre participation aux frais est précieuse et permet de pérenniser le projet.
                </p>


            </div>

            <div class="card-footer">
                <p class="small">Paiement sécurisé par <a target="_blank" href="https://stripe.com/">Stripe</a>. Vous interrompez quand vous voulez.
                </p>
                <button class="btn btn-lg btn-block btn-primary"
                id="shared_normal"
                role="link">Paiement en ligne</button>
            </div>

        </div>




        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tarif de soutien</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">20€ <small class="text-muted">/ mois</small></h1>
                <p class="card-text">
                    Vous avez envie de soutenir activement le projet? Merci! C’est grâce aux gens comme vous que cette plateforme est accessible à tou.te.s et évolue.
                </p>



            </div>
            <div class="card-footer">
                <p class="small">Paiement sécurisé par <a target="_blank" href="https://stripe.com/">Stripe</a>. Vous interrompez quand vous voulez.
                </p>
                <button class="btn btn-lg btn-block btn-primary"
                id="shared_sponsor"
                role="link">Paiement en ligne</button>

            </div>
        </div>
    </div>

</div>



<div class="container my-5 justify-content-center">


    <h2 class="text-center mb-5">Option 2 : Vous souhaitez une Agora dédiée uniquement à votre association, école, groupe citoyen, politique, etc...</h2>

    <div class="card-deck mb-3 text-center align-self-stretch">


        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Hébergez vous-même</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">0€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Aucune limite</li>
                    <li>Pas de version "freemium" ou d'édition "pro"</li>
                    <li><strong>Vous gérez tout vous même</strong></li>
                    <li>Licence GPL (open source)</li>
                    <li><strong>Demande beaucoup de compétences techniques</strong></li>
                </ul>
            </div>

            <div class="card-footer">
                <a href="https://github.com/agorakit/agorakit" type="button" class="btn btn-lg btn-block btn-outline-primary" target="_blank">Téléchargez les sources</a>
            </div>
        </div>


        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tarif normal</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">40€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Votre Agora privée infogérée</li>
                    <li>Utilisez votre domaine ou sous-domaine</li>
                    <li><strong>Groupes et utilisateurs illimités</strong></li>
                    <li>10Gb de stockage</li>
                    <li>Support par mail et téléphone</li>
                </ul>



            </div>
            <div class="card-footer">
                <p class="small">Paiement sécurisé par <a target="_blank" href="https://stripe.com/">Stripe</a>. Vous interrompez quand vous voulez. <strong>30 jours d'essai gratuits.</strong>
                </p>
                <button class="btn btn-lg btn-block btn-primary mt-2"
                id="dedicated_normal"
                role="link">Paiement en ligne</button>
            </div>
        </div>



        <div class="pricing-card card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Tarif de soutien</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">80€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Votre Agora privée infogérée et <strong>un soutien substantiel au projet qui le pérennise : merci.</strong></li>
                    <li>Utilisez votre domaine ou sous-domaine</li>
                    <li><strong>Groupes et utilisateurs illimités</strong></li>
                    <li>20Gb de stockage</li>
                    <li>Support par mail et téléphone</li>
                    <li><strong>Vous soutenez le projet en finançant 1 heure de développement chaque mois.</strong></li>
                </ul>



            </div>
            <div class="card-footer">
                <p class="small">Paiement sécurisé par <a target="_blank" href="https://stripe.com/">Stripe</a>. Vous interrompez quand vous voulez. <strong>30 jours d'essai gratuits.</strong>
                </p>
                <button class="btn btn-lg btn-block btn-primary mt-2"
                id="dedicated_sponsor"
                role="link">Paiement en ligne</button>
            </div>
        </div>
    </div>

</div>


<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>


<!-- load the stripe config for this page-->
<script src="stripe.js"></script>


<div id="error-message" style="display: none">Une erreur est survenue. <a href="mailto:info@agorakit.org">Merci de nous contacter</a> si vous avez rencontré un problème avec votre commande. Votre carte n'a pas été débitée.</div>

<?php include('footer.php') ?>
