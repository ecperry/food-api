<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class CustomerController extends Controller
{
  public function index ()

  {
    // GET request
    // list

    $customers = Customer::all();
    return Response::json($customers);
}

public function create(Request $request)
{
  //POST /customer
  //create new customer
Customer::create($request->all());
return Response::json(['created => true']);
}


public function show ($id) {

  // GET /customer/$id
  // show a single game info
 $customers = Customer::find($id);
 return Response::json($customers);
}

public function update (Request $request, $id) {
// DELETE /customer/$id
// update a single game
$customers = Customer::find($id);
$success = $customers->update($request->all());
return Response::json(['updated' => $success]);

}

public function destroy ($id) {
//DELETE /customer/$id
// remove a single customer

$customers = Customer::find($id);
$customers->delete();
return Response::json(['deleted' => true]);
  }
}
