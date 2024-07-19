<footer class=" text-dark py-4" style="background-color: #FDFCF6">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>À propos de nous</h5>
                <p>Nous mettons en location une collection de voitures de différentes catégories adaptées à tous vos besoins et préférences. N'hésitez pas à nous contactez</p>
            </div>
            <div class="col-md-4">
                <h5>Liens</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-dark">Accueil</a></li>
                    <li><a href="{{ route('voiture.index') }}" class="text-dark">Nos voitures</a></li>
                    <li><a href="{{ route('voiture.create') }}" class="text-dark">Ajouter Voiture</a></li>
                    <li><a href="{{ route('categorie.index') }}" class="text-dark">Liste des catégories</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contactez-nous</h5>
                <p>
                    <strong>Adresse:</strong> Cotonou, Bénin<br>
                    <strong>Téléphone:</strong> +229 50 92 40 96<br>
                    <strong>Email:</strong> bienvenu@voituredeluxe.org
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="#" class="text-dark mr-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-dark mr-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-dark mr-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p>&copy; 2024, Voiture de Luxe, Tous droits réservés</p>
            </div>
        </div>
    </div>
</footer>
