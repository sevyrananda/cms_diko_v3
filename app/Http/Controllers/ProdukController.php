<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\FiturLanding;
use App\Models\FiturPos;
use App\Models\FiturPos2;
use App\Models\FiturSp;
use App\Models\FiturSp2;
use App\Models\PricingSp;
use App\Models\PricingPos;
use App\Models\FaqLanding;
use App\Models\FaqSp;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::get();
        $fiturLanding = FiturLanding::all();
        $fiturPos = FiturPos::all();
        $fiturPos2 = FiturPos2::all();

        // Gabungkan data dari ketiga model menjadi satu variabel
        $fitur = $fiturLanding->concat($fiturPos)->concat($fiturPos2);
        return view('pages.produk.list', compact('products', 'fitur'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'preview_selection' => 'required|in:preview_pos,preview_sp',
        ]);

        $product = new Produk();
        $product->nama_produk = $request->input('nama_produk');
        $product->preview_selection = $request->input('preview_selection');
        $product->save();

        // if ($request->input('preview_selection') === 'preview_pos') {
        //     $pos = FiturPos::all();
        //     $pos2 = FiturPos2::all();
        //     $products = Produk::all();
        //     return view('pages.produk.list', compact('product', 'products', 'pos', 'pos2'));
        // } elseif ($request->input('preview_selection') === 'preview_sp') {
        //     // Gantilah dengan tampilan preview_sp jika Anda memiliki tampilan khusus untuk itu
        //     return view('pages.produk.list', compact('product'));
        // }

        return redirect('/produk')->with('success', 'Produk telah ditambahkan.');
    }


    public function show($id)
    {
        $product = Produk::all();
        return view('pages.produk.list', compact('product'));
    }

    public function landing()
    {
        $posts = FiturLanding::all();
        $faq = FaqLanding::all();
        $products = Produk::all();
        return view('pages.produk.landing', compact('posts', 'faq', 'products'));
    }

    public function preview($id, $selection)
    {
        $product = Produk::find($id);
        $pricing = PricingSp::all();
        $pricings = PricingPos::all();
        $faq = FaqSp::all();

        if ($selection === 'preview_pos') {
            $pos = FiturPos::all();
            $pos2 = FiturPos2::all();
            return view('pages.produk.preview_pos', compact('product', 'pos', 'pos2', 'pricings'));
        } elseif ($selection === 'preview_sp') {
            $sp = FiturSp::all();
            $sp2 = FiturSp2::all();
            return view('pages.produk.preview_sp', compact('product', 'sp', 'sp2', 'pricing', 'faq'));
        }

        return redirect('/produk')->with('success', 'Invalid selection.');
    }


    public function edit($id)
    {
        $product = Produk::find($id);
        return view('pages.produk.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_nama_produk' => 'nullable',
            // 'edit_section' => 'nullable',
        ]);

        // Temukan data post berdasarkan ID
        $product = Produk::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_nama_produk')) {
            $product->nama_produk = $request->input('edit_nama_produk');
        }
        // if ($request->has('edit_section')) {
        //     $product->section = $request->input('edit_section');
        // }

        $product->save();

        return redirect('/produk')->with('success', 'Features has been edited.');
    }

    public function destroy($id)
    {
        $product = Produk::find($id);
        $product->delete();

        return redirect('/produk')->with('success', 'Features has been deleted.');
    }
}
