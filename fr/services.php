<?php include('header.php') ?>


<?php include('nav.php') ?>



<div class="container my-5">



    <div class="container my-5 justify-content-center">

        <h1 class="text-center mb-4">Hébergement sur mesure</h1>


        <h2 class="sub text-center mb-5">Vous souhaitez une Agora dédiée uniquement à votre association, école, groupe citoyen, politique, etc...</h2>

        <div class="card-deck mb-3 text-center align-self-stretch">


            <div class="pricing-card card mb-4 shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Hébergez vous-même</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">0€ <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><strong>Vous gérez tout vous même</strong></li>
                        <li>Pas de version "freemium" ou d'édition "pro"</li>
                        <li>Licence GPL (open source)</li>
                        <li>Vous prenez en charge les <strong>frais d'hébergement</strong>, de mise à jour et de maintenance</li>
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
                    <h1 class="card-title pricing-card-title">60€ <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Votre Agora privée infogérée : hébergement, installation, maintenance, mises à jour</li>
                        <li><strong>30 jours d'essai gratuits</strong></li>
                        <li>Utilisez votre nom de domaine ou sous-domaine</li>
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
                    <h1 class="card-title pricing-card-title">100€ <small class="text-muted">/ mois</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Votre Agora privée infogérée : hébergement, installation, maintenance, mises à jour</li>
                        <li><strong>30 jours d'essai gratuits</strong></li>
                        <li>Utilisez votre nom de domaine ou sous-domaine</li>
                        <li><strong>Groupes et utilisateurs illimités</strong></li>
                        <li>20Gb de stockage</li>
                        <li>Support par mail et téléphone</li>
                        <li><strong>Vous soutenez le projet de manière substantielle en finançant 1 heure de développement chaque mois: merci!</strong></li>
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



    <div class="container my-5 text-center">

        <h1 class="text-center mb-4">Des questions ?</h1>


        <h2 class="mt-5">Où est hébergé Agorakit?</h2>

        <p class="big">
            En France, chez <a href="https://alwaysdata.com" target="_blank">Alwaysdata</a>, un excellent hébergeur <a href="https://www.alwaysdata.com//fr/transparence/">qui a</a> <a href="https://www.alwaysdata.com//fr/green-it/">des</a> <a href="https://www.alwaysdata.com//fr/open-source/">valeurs</a>.
            <br/>
            Vos données sont en sécurité grâce à un hébergeur performant qui propose une sauvegarde quotidienne sur 30 jours.
        </p>


        <h2 class="mt-5">Puis-je arrêter mon abonnement à tout moment?</h2>

        <p class="big">
            Oui, il vous suffit de nous contacter.
        </p>

        <h2 class="mt-5">Pourquoi proposez-vous plusieurs tarifs pour le même service ?</h2>

        <p class="big">
            Parceque certains groupes ont des moyens très limités et que d'autres peuvent se permettre de soutenir activement un projet tel que Agorakit. Nous laissons le libre choix à chacun de payer ce qui est possible afin d'aider le plus grand nombre de groupes.
        </p>


        <h2 class="mt-5">Je pensais que les logiciels libres étaient gratuits !?</h2>

        <p class="big">
            Un logiciel libre (open source) tel que Agorakit est en effet gratuit à télécharger et à installer. Par contre, l'hébergement et la maintenance coûtent de l'argent. C'est pour cela que nous proposons un service d'hébergement payant. En prenant un hébergement chez nous, vous soutenez le projet et permettez au développeur de dégager du temps pour améliorer le logiciel et en faire profiter tout le monde.
        </p>


        <h2 class="mt-5">Le paiement est-il sécurisé?</h2>

        <p class="big">
            Nous utilisons Stripe, un des prestataires de paiement les plus utilisés. Vos données bancaires ne transitent jamais par nos serveurs, la <a href="https://stripe.com/docs/security">sécurité</a> est prise au sérieux et garantie par Stripe. <br/>De plus tous nos  services d'hébergement utilisent le protocole https.
        </p>


        <h2 class="mt-5">Qui détient mes données?</h2>

        <p class="big">
            Vous êtes et serez toujours le/la propriétaire de vos données. Il est toujours possible pour un groupe d'exporter des données et de les réinstaller ailleurs.
            <br/>
            Agorakit est un logiciel open source : cela signifie que vous pouvez à tout moment héberger "votre" Agorakit ailleurs. Vous n'êtes pas coincé.e sur une plateforme propriétaire.
        </p>


        <h2 class="mt-5">Le nombre de groupes et d'utilisateurs est il vraiment illimité?</h2>

        <p class="big">
            Un service hébergé est toujours un moment confronté à des limites. Dans le cas de votre hébergement, c'est principalement l'espace de stockage qui est une limite concrète.
            <br/> <br/> Pour vous donner une idée: sur l'Agora partagée il y a plusieurs milliers d'utilisateurs et de groupes sans ralentissements et en restant largement en dessous des limites de stockage.
            <br/> <br/> Si vous pensez que votre projet est vraiment hors norme au niveau de son utilisation des ressources contactez-nous afin de valider une solution technique pertinente.
        </p>

    </div>



    <!-- Load Stripe.js on your website. -->
    <script src="https://js.stripe.com/v3"></script>


    <!-- load the stripe config for this page-->
    <script src="stripe.js"></script>


    <div id="error-message" style="display: none">Une erreur est survenue. <a href="mailto:info@agorakit.org">Merci de nous contacter</a> si vous avez rencontré un problème avec votre commande. Votre carte n'a pas été débitée.</div>

    <?php include('footer.php') ?>
