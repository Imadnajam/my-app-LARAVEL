<?php

namespace App\Http\Controllers;

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
            'prix_achat'=>$request->prix_achat,
            'id_Fournissours'=>$request->id_Fournissours
            ]);
            return response("l'ajout est effectué avec succès ... ");
            }

}
