<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index ()

  {
    // GET request
    // list

    $customer = Customer::all();
    return Response::json($customer);
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
 $customer = Customer::find($id);
 return Response::json($customer);
}

public function update (Request $request, $id) {
// DELETE /customer/$id
// update a single game
$customer = Customer::find($id);
$success = $customer->update($request->all());
return Response::json(['updated' => $success]);

}

public function destroy ($id) {
//DELETE /customer/$id
// remove a single customer

$Customer = Customer::find($id);
$customer->delete();
return Response::json(['deleted' => true]);
  }
}
