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
use App\Models\PluginPos;
use App\Models\PluginSp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::get();
        $fiturLanding = FiturLanding::all();
        $fiturPos = FiturPos::all();
        $fiturPos2 = FiturPos2::all();
        $user = Auth::user();

        // Gabungkan data dari ketiga model menjadi satu variabel
        $fitur = $fiturLanding->concat($fiturPos)->concat($fiturPos2);
        return view('pages.produk.list', compact('products', 'fitur', 'user'));
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
            $posts = PluginPos::all();
            return view('pages.produk.preview_pos', compact('product', 'pos', 'pos2', 'pricings', 'posts'));
        } elseif ($selection === 'preview_sp') {
            $sp = FiturSp::all();
            $sp2 = FiturSp2::all();
            $posts = PluginSp::all();
            return view('pages.produk.preview_sp', compact('product', 'sp', 'sp2', 'pricing', 'faq', 'posts'));
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
            'edit_preview_selection' => 'nullable|in:preview_pos,preview_sp',
        ]);

        // Temukan data post berdasarkan ID
        $product = Produk::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_nama_produk')) {
            $product->nama_produk = $request->input('edit_nama_produk');
        }
        if ($request->has('edit_preview_selection')) {
            $product->preview_selection = $request->input('edit_preview_selection');
        }

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
