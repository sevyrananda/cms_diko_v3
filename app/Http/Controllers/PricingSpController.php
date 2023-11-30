<?php

namespace App\Http\Controllers;

use App\Models\PricingSp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingSpController extends Controller
{
    public function index()
    {
        $pricing = PricingSp::get();
        $user = Auth::user();
        return view('pages.diko_sp.pricing.list', compact('pricing', 'user'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_pricingsp' => 'required',
            'harga_pricingsp' => 'required',
            'deskripsi_pricingsp' => 'required|array',
        ]);

        $post = PricingSp::create([
            'nama_pricingsp' => $request->input('nama_pricingsp'),
            'harga_pricingsp' => $request->input('harga_pricingsp'),
        ]);

        foreach ($request->deskripsi_pricingsp as $deskripsi) {
            $post->deskripsi()->create([
                'deskripsi' => $deskripsi,
            ]);
        }

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been added.');
    }

    public function show($id)
    {
        $pricing = PricingSp::all();
        return view('pages.diko_sp.pricing.list', compact('pricing'));
    }

    public function preview($id) //blm dikasih isi page
    {
        $pricing = PricingSp::find($id);
        return view('pages.diko_sp.pricing.preview', compact('pricing'));
    }

    public function edit($id) //kayany gak digunakan
    {
        $pricing = PricingSp::find($id);
        return view('pages.diko_sp.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_nama_pricingsp' => 'required',
            'edit_harga_pricingsp' => 'required',
            'edit_deskripsi_pricingsp' => 'required|array',
        ]);

        // Temukan data post berdasarkan ID
        $post = PricingSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->nama_pricingsp = $request->input('edit_nama_pricingsp');
        $post->harga_pricingsp = $request->input('edit_harga_pricingsp');

        // Hapus deskripsi lama
        $post->deskripsi()->delete();

        // Tambahkan deskripsi baru
        foreach ($request->edit_deskripsi_pricingsp as $deskripsi) {
            $post->deskripsi()->create([
                'deskripsi' => $deskripsi,
            ]);
        }

        $post->save();

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = PricingSp::find($id);
        $post->delete();

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been deleted.');
    }

}
