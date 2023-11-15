<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('addligne.Fournisseur') }}" method="POST">
            @csrf
            <h2>Ajouter un Fournisseur</h2>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" class="form-control" id="ville" name="ville" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        <br>
        <form action="{{ route('addligne.Articles') }}" method="POST">
            @csrf
            <h2>Ajouter un Article</h2>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="poids">Poids:</label>
                <input type="number" class="form-control" id="poids" name="poids" min="20" required>
            </div>
            <div class="form-group">
                <label for="prix_achat">Prix d'achat:</label>
                <input type="number" class="form-control" id="prix_achat" name="prix_achat" required>
            </div>
            <div class="form-group">
                <label for="id_Fournissours">ID Fournisseur:</label>
                <input type="number" class="form-control" id="id_Fournissours" name="id_Fournissours" required>
            </div>
            <div class="form-group">
                <label for="couleur">Couleur:</label>
                <input type="text" class="form-control" id="couleur" name="couleur" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        <br><br>
       <form action="{{route('liste_fournisseurs')}}" method="POST">
        <button type="submit" class="btn btn-link">Complément TP Query Builder
        </button>
    </form>
    <table class="table-bordered mx-auto"  >
        <thead class="thead-dark">
            <tr>
                <th>Action</th>
                <th>Bouton</th>
            </tr>
        </thead>
        <tr>
            <td>Liste des fournisseurs d'Agadir</td>
            <td>
                <form action="{{ route('fournisseurs_Agadir') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q1</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Noms et villes des fournisseurs</td>
            <td>
                <form action="{{ route('fournisseurs_NF') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q2</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Désignations et poids des articles</td>
            <td>
                <form action="{{ route('désignations_poids') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q3</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Numéros et désignations des articles de couleur verte</td>
            <td>
                <form action="{{ route('désignations_couleur') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q4</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Prix d'achat supérieur à 500</td>
            <td>
                <form action="{{ route('prix_supérieur') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q5</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Articles ayant un poids entre 200 et 300</td>
            <td>
                <form action="{{ route('poids_entre') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q6</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Le nombre d'articles</td>
            <td>
                <form action="{{ route('nombreA') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q7</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Moyenne des prix d'achat</td>
            <td>
                <form action="{{ route('moyennePA') }}" method="POST">
                    <button type="submit" class="btn btn-info">Q8</button>
                </form>
            </td>
        </tr>
    </table>


    </div>


    <!-- Add Bootstrap JS and Popper.js scripts (order matters) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
