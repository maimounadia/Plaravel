<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
//Route::get('/', function () {
  //  $jours =["Lundi", "Mardi","Mercredi","Jeudi","Vendredi"];
   // return view('base')->with("jours", $jours);
//});
//Route::get('/about', function () {
    //return view('pages/about')
    //->with("prenom", "Modou")
    //->with('nom', "Sarr");
 //});


// Deuxieme Méthode
 //Route::get('/about', function () {
  // return view('pages/about')
   // ->withPrenom("Gnoror")
   //->withNom("Sarr");
//});


// Troisime Méthode
// Route::get('/about', function () {
    // return view('pages/about')
     //->with([
      //   'prenom' => "Maimouna",
       //  'nom' => "Diallo"
 // ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });

//Laravel Blade
//Route::get('/', function () {
    //$jours =["Lundi", "Mardi","Mercredi","Jeudi","Vendredi"];
   // return view('base')->with("jours", $jours);
//});
Route::view( '/about','pages/about');
Route::view( '/contact','pages/contact');
Route::view( '/service','pages/service');
Route::resource('etudiant', EtudiantController::class);


Route::get('/', function () {
    //*******Apprendre SQL Brute ********/
    //Selectionner la liste des articles//
   // $articles = DB::select('select * from articles');
   // dd($articles);
   // return view('base');


    //Selectionner la liste des articles//
   // $articles = DB::select('select * from articles limit 1');
   // dd($articles);
   // return view('base');

//Selectionner la liste des articles//
//$articles = DB::select('select * from articles ')[1];
//dd($articles);
//return view('base');

//A patir du 2em article, recuperer 1 articles //
//$articles = DB::select('select * from articles  limit 2');
//dd($articles);
//return view('base');


//A patir du 2em article, recuperer 1 articles //
//$articles = DB::select('select * from articles  limit 1 offset 2');
//dd($articles);
//return view('base');

//Inserer un article : 1ere methode
$ok= DB::insert("INSERT INTO articles value(null, :titre, :contenu, :etat, :date)",[
    'titre' => 'Titre4',
    'contenu' => 'Contenu4',
    'etat' => 1,
    'date' =>date('y-m-d H:i:s') ,


]);

//dd($ok); //1 ou 2
//return view('base');

 // Inserer un article : 2eme methode
   //   $titre = 'Titre 5';
   //   $contenu = 'Contenu 5';
   //   $etat = 0;
   //   $date = date('Y-m-d H:i:s');

   //   $ok = DB::insert("INSERT INTO articles
   //   values(null, :titre, :contenu, :etat,  :date)",
   //   compact('titre', 'contenu', 'etat', 'date'));
   //   dd($ok);

          // Inserer un article : 3eme methode
   // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles values(
        // null, ?, ?, ?, ?)",
        // [$titre, $contenu, $etat, $date]
    // );
    // dd($ok);


    // Modifier le titre du deuxieme article
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
    // dd($ok);


    // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
     //$articles = DB::table('articles ')->get('*');
     //$articles = DB::table('articles ')->get();

     //dd($articles);
//Selectionner tous les article(uniquement les colonnes in et titre)
   //  $articles = DB::table('articles')->get(['contenu','titre']);
   //  dd($articles);


   //Selectionner le premier qrticle//
   //   $articles = DB::table('articles')->first();
   //   dd($articles);

   //Selectionner letitre du  premier article//
   //  $article = DB::table('articles')->first();
   //  dd($article->contenu);
   //   $articles = DB::table('articles')->get()[0];
      //dd($articles );
      // dd($articles ->etat);
      // dd($articles ->date);
      // dd($articles ->id);

       //Selectionner l'article qui a pour tirre "titre 2" //
   //  $article = DB::table('articles')->whereId(2)->get();
   //  $article = DB::table('articles')->where('id', 2)->get();
   //  dd($article);

    //Selectionner tous les articleqdont leur id set >=2  //
   // $article = DB::table('articles')->where('id','>', 2)->get();
   // $article = DB::table('articles')->where('id','!=', 2)->get();
   // $article = DB::table('articles')->where('id','<', 2)->get();

    //Selectionner tous l'article dont le titre est "Tire 2 et le contenu "contenu 2"(premier methode)
   // $article = DB::table('articles')
   // ->whereTitreAndContenu('Titre 2', 'contenu 2' )
   // ->get();
   // dd($article);

       //Selectionner tous l'article dont le titre est "Tire 2 et le contenu "contenu 2"
       //le contenu "contenu 2(deuxieme methode)
      //  $article = DB::table('articles')
      //  ->where('titre', 'Titre 2')
      //  ->where('contenu', 'contenu 2')
      //  ->get();
      //  dd($article);

         //Selectionner tous l'article dont le titre est "Tire 2 ou le contenu "contenu 2"
       //le contenu "contenu 2(deuxieme methode)
      //  $article = DB::table('articles')
      //  ->whereTitreOrContenu('Titre', 'contenu 2')
      //  ->get();
      //  dd($article);

        //le contenu "contenu 2(deuxieme methode)
      //   $article = DB::table('articles')
      //   ->where('Titre', 'contenu 2')
      //   ->orwhere('contenu', 'contenu 2')
      //   ->get();
      //   dd($article);
      //    //selectionner le deuxieme article)
         // $article = DB::table('articles')->take(2)->get();
         // dd($article);
         //  //    a partir du deuxieme articles,selectionner 3 articles)
         //  $article = DB::table('articles')->where('id','>','2')
         //  ->take(3)
         //  ->get();
         //  dd($article);

           //   selectionner tous les articles dans l'ordre ascendant)
         //   $articles1 = DB::table('articles')->orderBy('titre','asc')->get();
         //   $articles2 = DB::table('articles')->orderBy('titre','desc')->get();
         //    dump($articles1);
         //     dd($articles2);

             //   selectionner tous les articles dont leur id  >2 en faisant un trie ascendant)
         //   $articles = DB::table('articles')->where('id', '>','2')->orderBy('titre','asc')->get();
         //   dd($articles);
              //   selectionner tous les articles dont leur id  >2 en faisant un trie ascendant)
            //   $articles = DB::table('articles')->count();
            //   dd($articles);
                //   selectionner tous les articles dont leur id  >2 en faisant un trie ascendant)
      //           $articles = DB::table('articles')->count();

    // Afficher le nombre d'article
   //   $articles = DB::table('articles')->count();
   //   dd($articles);
    //Inserer 2 article
   //   $ok = DB::table('articles')->insert(
   //      [
   //          [
   //              'titre' => 'Titre 8',
   //              'contenu' => 'Contenu 8',
   //              'etat' => 0,
   //             'date' => date('Y-m-d H:i:s')
   //           ],
   //           [
   //              'titre' => 'Titre 9',
   //              'contenu' => 'Contenu 9',
   //               'etat' => 1,
   //              'date' => date('Y-m-d H:i:s')
   //         ]
   //       ]
   //   );
   //   dd($ok);

          // Supprimer l'article d'id 4
   //  $ok = DB::table('articles')->where('id', 4)->delete();
   //  dd($ok);
          // 🌴🌴🌴 Apprendre Eloquent (ORM) 🔥🔥🔥🔥🔥 💪🏾💪🏾💪🏾 🌴🌴🌴

   //  $etudiants = Etudiant::All();
   //  dd($etudiants);

    // Recuperer l'etudiant qui l'id 1
   //  $etudiants = Etudiant::find(1);
   //   dd($etudiants);


    // Recuperer le nom et le prenom l'etudiant qui a l'id 2
   //   $etudiants = Etudiant::whereId(2)->get(['nom', 'prenom']);
   //   dd($etudiants);


    // Recuperer le nom et le prenom de l'etudiant dont son
    //prenom est different de "Modou" et son age > 13
    //  $etudiants = Etudiant::where('prenom', '!=','Modou')
    //              ->where('age', '>', 13)
    //              ->get(['nom', 'prenom']);
    //  dd($etudiants);
    // Recuperer le nom et le prenom de l'etudiant
    // $nomPremierEtudiant = Etudiant::first()->nom;
    // dd($nomPremierEtudiant);

    //  // Ajouter un etudiant (Premiere methode)
    //  $etudiant = new Etudiant();
    //  $etudiant->nom = "Fall";
    //  $etudiant->prenom = "Fatou";
    //  $etudiant->matricule = "101012";
    //  $etudiant->age = 15;
    //  $etudiant->save();

     // Ajouter un etudiant (deuxieme methode)
  //   $etudiant = new Etudiant(
  //     [
  //      'nom' => "Fall",
  //      'prenom' => "Mariame",
  //       'matricule' => "101012",
  //       'age' => 16,
  //     ]
  //   );

  //  $ok = $etudiant->save();
  //  dd($ok);



     // Ajouter un etudiant (deuxieme methode)
    //  $etudiant =  Etudiant::create(
//        [
//        'nom' => "Fall",
//         'prenom' => "Mariame",
//          'matricule' => "101012",
//        'age' => 17,
//        ]
//     );

//     dd("L'etudiant"  . $etudiant->prenom . ' ' . $etudiant->nom .
//     'a été crée avec succé !!!') ;

//       return view('base');
//    });


















