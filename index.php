<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        h1.center-title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3rem;
            font-weight: 300;
            color: #333333;
            text-align: center;
            margin-top: 20px;
            position: relative;
        }
        h1.center-title::after {
            content: '_';
            position: absolute;
            color: #333333;
            font-weight: 300;
        }
    </style>

    <script>
        // Citations de Blade Runner pour le bouton "Rebooter le Monde"
        const bladeRunnerQuotes = [
            "All those moments will be lost in time, like tears in rain.",
            "I've seen things you people wouldn't believe...",
            "The light that burns twice as bright burns half as long.",
            "Quite an experience to live in fear, isn't it? That's what it is to be a slave.",
            "Wake up! Time to die!",
            "You're in a desert, walking along in the sand, when all of a sudden you look down..."
        ];

        // Fonction pour changer le texte du jumbotron avec des citations aléatoires
        function rebootWorld() {
            const randomIndex = Math.floor(Math.random() * bladeRunnerQuotes.length);
            const randomQuote = bladeRunnerQuotes[randomIndex];
            document.getElementById("jumbotronText").innerText = randomQuote;
        }

        // Contenus pour la pagination
        const pageContents = [
            "Bienvenue à la page 1. Voici le premier contenu du jumbotron.",
            "Ceci est le contenu de la page 2. Plus de contenu intéressant ici.",
            "Page 3 : Encore plus de contenu fascinant dans le jumbotron."
        ];

        // Fonction pour modifier le contenu du jumbotron en fonction de la page sélectionnée
        function changeJumbotronContent(pageNumber) {
            const content = pageContents[pageNumber - 1]; // Page 1 correspond à l'index 0
            document.getElementById("jumbotronText").innerText = content;
        }

        // Fonction pour gérer l'activation d'un élément de la liste à droite
        function activateListItem(element) {
            // Supprimer l'état actif de tous les éléments
            const listItems = document.querySelectorAll('.list-group-item');
            listItems.forEach(item => item.classList.remove('active'));

            // Ajouter l'état actif à l'élément cliqué
            element.classList.add('active');
        }
    </script>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LPFT</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="https://laplateforme.io/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Units</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="center-title">LaPlateforme</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Bloc Carte "Un Papillon" à gauche -->
            <div class="col-md-4">
                <div class="card">
                    <img src="papillon.jpg" class="card-img-top" alt="Un Papillon">
                    <div class="card-body">
                        <h5 class="card-title">Un Papillon</h5>
                        <p class="card-text">Cet être, né d’un poème comme une chenille, mais avec des ailes. Ne pas les ingérer.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#papillonmodal">Commander votre propre papillon</a>
                    </div>
                </div>
            </div>
            
            <!-- Modal de confirmation d'achat -->
            <div class="modal" id="papillonmodal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmation d'achat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Voulez-vous vraiment acheter ce papillon ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">Confirmer l'achat</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bloc "Bonjour, monde!" au centre avec bouton "Rebooter le Monde" -->
            <div class="col-md-5">
                <div class="card p-4">
                    <h1>Bonjour, monde!</h1>
                    <p id="jumbotronText">Il existe plusieurs visions du terme :</p>
                    <ul>
                        <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                        <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                    </ul>
                    <hr>
                    <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                    <button class="btn btn-danger" onclick="rebootWorld()">Rebooter le Monde</button>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="mt-4">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#" onclick="changeJumbotronContent(1)">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" onclick="changeJumbotronContent(2)">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" onclick="changeJumbotronContent(3)">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Liste à droite -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true" onclick="activateListItem(this)">Limbes</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Luxure</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Gourmandise</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Avarice</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Colère</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Hérésie</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Violence</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Ruse et Tromperie</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Trahison</li>
                    <li class="list-group-item" onclick="activateListItem(this)">Internet Explorer</li>
                </ul>
            </div>
        </div>

        <!-- Progress bar et formulaire d'entrée côte à côte -->
        <div class="row mt-4">
            <!-- Bloc progress bar et premier formulaire -->
            <div class="col-md-6">
                <h6>Installation de AI 9000</h6>
                <div class="progress mb-3">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>

                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>

                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <!-- Deuxième formulaire -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Augmenter/Diminuer la barre de progression
            $("#increase").click(function() {
                let currentWidth = parseInt($("#progress-bar").attr("aria-valuenow"));
                if (currentWidth < 100) {
                    currentWidth += 10;
                    $("#progress-bar").css("width", currentWidth + "%").attr("aria-valuenow", currentWidth);
                }
            });

            $("#decrease").click(function() {
                let currentWidth = parseInt($("#progress-bar").attr("aria-valuenow"));
                if (currentWidth > 0) {
                    currentWidth -= 10;
                    $("#progress-bar").css("width", currentWidth + "%").attr("aria-valuenow", currentWidth);
                }
            });

            // Séquence de touches pour afficher le récapitulatif
            let keySequence = [];
            const correctSequence = ['d', 'g', 'c'];

            document.addEventListener('keydown', function(event) {
                keySequence.push(event.key.toLowerCase());
                if (keySequence.length > 3) {
                    keySequence.shift();
                }

                if (keySequence.join('') === correctSequence.join('')) {
                    const login = $('input[placeholder="Login"]').val();
                    const password = $('input[placeholder="Mot de Passe"]').val();
                    const url = $('input[placeholder="URL des Internets 2 et 2.1 Beta"]').val();
                    const dogecoin = $('input[placeholder="DogeCoin"]').val();
                    const email = $('input[type="email"]').val();
                    const formPassword = $('input[placeholder="Password"]').val();

                    const recapContent = `
                        <strong>Login:</strong> ${login}<br>
                        <strong>Mot de Passe:</strong> ${password}<br>
                        <strong>URL:</strong> ${url}<br>
                        <strong>DogeCoin:</strong> ${dogecoin}<br>
                        <strong>Email:</strong> ${email}<br>
                        <strong>Password:</strong> ${formPassword}
                    `;
                    $('#form-recap-content').html(recapContent);
                    $('#formRecapModal').modal('show');
                }
            });

            // Couleur aléatoire après validation du formulaire
            $('#submit-btn').click(function(event) {
                event.preventDefault();

                let email = $('#email').val().trim();
                let password = $('#password').val().trim();
                let formValid = true;

                if (email === "") {
                    $('#email-error').show();
                    formValid = false;
                } else {
                    $('#email-error').hide();
                }

                if (password === "") {
                    $('#password-error').show();
                    formValid = false;
                } else {
                    $('#password-error').hide();
                }

                if (formValid) {
                    $('.col-md-6:nth-child(2)').css('background-color', getRandomColor());
                }
            });
        });

        // Fonction pour générer une couleur aléatoire
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</head>
<body>

    <h1 class="center-title">LaPlateforme</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Progress bar section -->
            <div class="col-md-6">
                <h6>Installation de AI 9000</h6>
                <div class="progress mb-3">
                    <div id="progress-bar" class="progress-bar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button id="increase" class="btn btn-success">Increase</button>
                <button id="decrease" class="btn btn-danger">Decrease</button>
            </div>

            <!-- Form section -->
            <div class="col-md-6">
                <form id="main-form">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <div id="email-error" class="error-message">Email is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <div id="password-error" class="error-message">Password is required.</div>
                    </div>
                    <button id="submit-btn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for form recap -->
    <div class="modal fade" id="formRecapModal" tabindex="-1" aria-labelledby="formRecapLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formRecapLabel">Form Recap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="form-recap-content">
                    <!-- Content will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

</body>
</html>


