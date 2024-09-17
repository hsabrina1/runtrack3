<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LPFT</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
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
                        <a href="#" class="btn btn-primary">Commander votre propre papillon</a>
                    </div>
                </div>
            </div>

            <!-- Bloc "Bonjour, monde!" au centre -->
            <div class="col-md-5">
                <div class="card p-4">
                    <h1>Bonjour, monde!</h1>
                    <p>Il existe plusieurs visions du terme :</p>
                    <ul>
                        <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                        <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                    </ul>
                    <hr>
                    <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                    <button class="btn btn-danger">Rebooter le Monde</button>
                    <!-- Pagination example -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Liste à droite -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Limbes</li>
                    <li class="list-group-item">Luxure</li>
                    <li class="list-group-item">Gourmandise</li>
                    <li class="list-group-item">Avarice</li>
                    <li class="list-group-item">Colere</li>
                    <li class="list-group-item">Heresie</li>
                    <li class="list-group-item">Violence</li>
                    <li class="list-group-item">Ruse et Tromperie</li>
                    <li class="list-group-item">Trahison</li>
                    <li class="list-group-item">Internet Explorer</li>
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

</body>
</html>













