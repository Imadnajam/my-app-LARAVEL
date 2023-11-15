<?php

namespace App\Http\Controllers;
use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QB extends Controller
{
    public function AddLigneFour(Request $request){
        DB::table('fournisseur')->insert([
        'nom'=>$request->nom,
        'ville'=>$request->ville,

        ]);
        return response("l'ajout est effectué avec succès ... ");
        }
        public function AddLigneArticle(Request $request){
            DB::table('articles')->insert([
            'description'=>$request->description,
            'poids'=>$request->poids,
            'couleur'=>$request->couleur,
            'prix_achat'=>$request->prix_achat,
            'id_Fournissours'=>$request->id_Fournissours
            ]);
            return response("l'ajout est effectué avec succès ... ");
            }
            public function liste_fournisseurs() {
                $four = DB::table('fournisseur')->get();
                return view('listeF', ['four' => $four]);
            }

        public function fournisseurs_Agadir(){
            $four=DB::table('fournisseur')->where('ville','=','Agadir')->get();
            return response($four);
        }
        public function fournisseurs_NF(){
            $four=DB::table('fournisseur')->get(['nom', 'ville']);
            return response($four);
        }
        public function désignations_poids(){
            $art=DB::table('articles')->get(['description', 'poids']);
            return response($art);
        }
        public function désignations_couleur(){
            $art=DB::table('articles')->where('couleur','=','Vert')->get(['id', 'poids']);
            return response($art);
        }
        public function prix_supérieur(){
            $art=DB::table('articles')->where('couleur','=','Vert')->where('prix_achat','>=',500)->get(['id', 'poids']);
            return response($art);
        }
        public function poids_entre(){
            $art=DB::table('articles')->where('poids','>=',200)->where('poids','<=',300)->get();
            return response($art);
        }
        public function nombreA(){
            $art=DB::table('articles')->count('*');
            return response($art);
        }
        public function moyennePA(){
            $art=DB::table('articles')->avg('prix_achat');
            return response($art);
        }
        public function articleDF(Request $request) {

            $idFournisseur = $request->input('fournisseur');


            $four = DB::table('articles')->where('id_Fournissours', $idFournisseur)->get();

            return view('listeA', ['four' => $four]);
        }

        public function destroy(articles $article)
        {
            $article->delete();
            return response()->json(['success' => true, 'message' => 'Article deleted successfully.'], 200);
        }
}
