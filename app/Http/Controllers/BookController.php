<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Book;
use App\Models\Visitor;
use App\Models\BorrowedBook;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateBBookRequest;

class BookController extends Controller
{
    function index() {
    
        return view('/Dashboard');
    }
    function showbooks (){
        $books=Book::all();
        return view('AllBooks', ["books" => $books]);
    
    }
    function showusers (){
        $users=Visitor::all();
        return view('AllUsers', ["users" => $users]);
    
    }
    function showbbooks (){
        $bbooks=BorrowedBook::all();
        return view('BBooks', ["bbooks" => $bbooks]);
    
    }

function editbook($id){
    $book=Book::find($id);
    return view('/EditBook', ["book" => $book]);

}
function edituser($id){
    $user=Visitor::find($id);
    return view('/EditUser', ["user" => $user]);

}
function editbbook($id){
    $bbook=BorrowedBook::find($id);
    return view('/EditBBook', ["bbook" => $bbook]);

}

function destroybook($id){
    //delete
    Book::destroy($id);
    return redirect("/AllBooks");
}
function destroybbook($id){
    //delete
    BorrowedBook::destroy($id);
    return redirect("/BBooks");
}
function destroyuser($id){
    Visitor::destroy($id);
    return redirect("/AllUsers");
}
function viewbook($id){
    $book=Book::find($id);
    return view('/ViewBook', ["book" => $book]);

}
function viewuser($id){
    $user=Visitor::find($id);
    return view('/ViewUser', ["user" => $user]);

}
function viewbbook($id){
    $book=Book::find($id);
    $bbook=BorrowedBook::find($id);
    return view('/ViewBBook', ["bbook" => $bbook]);

}
function updatebook(UpdateBookRequest $request ,$id){
    
    $data=$request->all();
    $book=Book::find($id);
    $book-> title= $data['title'];
   // $book-> cover= $data['cover'];
    $book-> author= $data['author'];
    $book-> description= $data['description'];
    $book-> published_year= $data['published_year'];
    $book-> save();

    return redirect("/AllBooks");
}
function updateuser(UpdateUserRequest $request ,$id){
    
    $data=$request->all();
    $user=Visitor::find($id);
    $user-> NAME= $data['name'];
    $user-> pass= $data['pass'];
    $user-> email= $data['email'];
    $user-> role= $data['role'];
    $user-> save();

    return redirect("/AllUsers");
}
function updatebbook(UpdateBBookRequest $request ,$id){
    
    $data=$request->all();
    $bbook=BorrowedBook::find($id);
    $bbook-> borrowed_at= $data['borrowed_at'];
    $bbook-> due_date= $data['due_date'];
    $bbook-> returned_at= $data['returned_at'];
    $bbook-> save();

    return redirect("/BBooks");
}
function addbook() {
    
    return view('/AddBook');
}
function adduser() {
    
    return view('/AddUser');
}
function storebook(StoreBookRequest $request) {
    //insert 
    $data=$request->all();
    $book= new Book;
    $book-> title= $data['title'];
   // $book-> cover= $data['cover'];
    $book-> author= $data['author'];
    $book-> description= $data['description'];
    $book-> published_year= $data['published_year'];
    $book-> save();

    return redirect("/AllBooks");
}

function storeuser(StoreUserRequest $request) {
    //insert 
    $data=$request->all();
    $user= new Visitor;
    $user-> NAME= $data['name'];
    $user-> pass= $data['pass'];
    $user-> email= $data['email'];
    $user-> role= $data['role'];
    $user-> save();

    return redirect("/AllUsers");
}
}
