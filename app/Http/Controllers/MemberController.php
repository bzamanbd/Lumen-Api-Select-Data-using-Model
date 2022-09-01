<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller{

  function selectAll(){
    $result = Member::all();
    if ($result==true) {
     return $result;
    } else {
     return 'Error Found !';
    }

  }

  function selectById(Request $req){
    $id = $req->id;
    $result = Member:: where('id', $id)->get();
    if ($result==true) {
     return $result;
    } else {
     return 'Error Found !';
    }

  }

}