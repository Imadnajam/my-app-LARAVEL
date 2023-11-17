<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles du Fournisseur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h1 class="mt-4">Liste des Articles du Fournisseur</h1>

        @if (count($four) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Poids</th>
                        <th>Prix d'achat</th>
                        <th>Couleur</th>
                        <th>ID du Fournisseur</th>
                        <th>Date de création</th>
                        <th>Date de mise à jour</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($four as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->description }}</td>
                            <td>{{ $article->poids }}</td>
                            <td>{{ $article->prix_achat }}</td>
                            <td>{{ $article->couleur }}</td>
                            <td>{{ $article->id_Fournissours }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>{{ $article->updated_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </form>

                                    <a href="{{ route('articles.edit', ['article' => $article->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>

                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun article trouvé pour ce fournisseur.</p>
        @endif
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
