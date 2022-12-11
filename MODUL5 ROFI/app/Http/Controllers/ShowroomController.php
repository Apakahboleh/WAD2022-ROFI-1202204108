<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{

    public function home()
    {
        return view("showroom.Home-Rofi");
    }

    public function index()
    {
        $mobil = Showrooms::orderBy("id", "desc")->get();
        // $mobil = Showrooms::all();
        return view("showroom.ListCar", compact(["mobil"]));
    }

    public function create()
    {
        return view("showroom.Add-Rofi");
    }

    public function store_create( Request $request )
    {
        $mobil = Showrooms::create($request -> except("selesai", "_token", "user_id"));

        // $namaGambar = $request -> image -> getClientOriginalName() . "-" . time() . "." . $request -> image -> extension();
        // $request -> image -> move(public_path("image"), $namaGambar);

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $mobil -> image = $request -> file("image")->getClientOriginalName();
            $mobil -> save();
        }

        // return redirect("/ListCar");
            return redirect("/ListCar")->with('tambah', 'Item berhasil Di Hapus');
    }

    public function edit_detail( $id )
    {
        $mobil = Showrooms::find($id);
        return view("showroom.Detail-Rofi", compact(["mobil"]));
    }

    public function edit( $id )
    {
        $mobil = Showrooms::find($id);
        return view("showroom.Edit-Rofi", compact(["mobil"]));
    }

    public function store_edit( $id, Request $request )
    {
        $mobil = Showrooms::find($id);
        $mobil -> update($request -> except("edit", "_token", "user_id"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $mobil -> image = $request -> file("image")->getClientOriginalName();
            $mobil -> save();
        }

        return redirect("/ListCar")->with('edit', 'Item berhasil Di Edit');
    }

    public function destroy( $id )
    {
        $mobil = Showrooms::find($id);
        $mobil -> delete();
        // return redirect("/ListCar");
        return redirect("/ListCar")->with('success', 'Item berhasil Di Hapus');
    }
}


