<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{

  public function index ()

  {
    // GET request
    // list

    $recipe = Recipe::all();
    return Response::json($recipe);
}

public function create(Request $request)
{
  //POST /recipe
  //create new recipe
Recipe::create($request->all());
return Response::json(['created => true']);
}


public function show ($id) {

  // GET /recipe/$id
  // show a single game info
 $recipe = Recipe::find($id);
 return Response::json($recipe);
}

public function update (Request $request, $id) {
// DELETE /recipe/$id
// update a single game
$recipe = Recipe::find($id);
$success = $recipe->update($request->all());
return Response::json(['updated' => $success]);

}

public function destroy ($id) {
//DELETE /recipe/$id
// remove a single recipe

$recipe = Recipe::find($id);
$recipe->delete();
return Response::json(['deleted' => true]);
  }

}
