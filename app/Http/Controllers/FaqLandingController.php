<?php

namespace App\Http\Controllers;

use App\Models\FaqLanding;
use Illuminate\Http\Request;


class FaqLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = FaqLanding::get();
        return view('pages.landing.faq.list', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('landing.fitur.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',

        ]);

        $faq = new FaqLanding();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $faq->save();

        return redirect('/faq')->with('success', 'Features has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $faq = FaqLanding::find($id);
        return view('pages.landing.faq.list', compact('faq'));
    }

    public function preview($id)
    {
        $faq = FaqLanding::find($id);
        return view('pages.landing.faq.preview', compact('faq'));
    }
    public function previewall()
    {
        $faq = FaqLanding::all();
        return view('pages.landing.faq.previewall', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faqs = FaqLanding::find($id);
        return view('pages.landing.faq.edit', compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_question' => 'required',
            'edit_answer' => 'required',

        ]);

        // Temukan data post berdasarkan ID
        $faq = FaqLanding::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $faq->question = $request->input('edit_question');
        $faq->answer = $request->input('edit_answer');

        $faq->save();

        return redirect('/faq')->with('success', 'Features has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = FaqLanding::find($id);
        $faq->delete();

        return redirect('/faq')->with('success', 'Features has been deleted.');
    }
}
