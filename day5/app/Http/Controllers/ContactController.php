<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contacts.index', ['contacts' => $contact]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        // 'nama_depan' => 'required|max:255',
        // 'nama_belakang' => 'required|max:255',
        // 'no_hp' => 'required|max:255',
        // 'no_tlp_rumah' => 'required|max:255',
        // 'email' => 'required|email:rfc,dns',
        // 'description' => 'required'
        // ]);

        // Contact::create($request->all());

        // return redirect('/contacts')->with('Kontak Berhasil Ditambahkan!');

        // validate
        $rules = array(
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'no_tlp_rumah' => 'required|max:13',
            'email' => 'required|email:rfc,dns',
            'description' => 'required'
        );

        $validator = validator()->make(request()->all(), $rules);

        // format tidak sesuai
        if ($validator->fails()) {
            return [
                'message' => 'Format Input Tidak Sesuai!',
            ];
        } else {
            // store
            $contact = new Contact;
            $contact->nama_depan = $request->nama_depan;
            $contact->nama_belakang = $request->nama_belakang;
            $contact->no_hp = $request->no_hp;
            $contact->no_tlp_rumah = $request->no_tlp_rumah;
            $contact->email = $request->email;
            $contact->description = $request->description;

            $contact->save();

            return [
                'message' => 'Kontak Berhasil Ditambahkan!',
            ];
        }
        // $contact = new Contact;

        // $contact->nama_depan = $request->nama_depan;
        // $contact->nama_belakang = $request->nama_belakang;
        // $contact->no_hp = $request->no_hp;
        // $contact->no_tlp_rumah = $request->no_tlp_rumah;
        // $contact->email = $request->email;
        // $contact->description = $request->description;

        // $contact->save();

        // return [
        //     'message' => 'Kontak Berhasil Ditambahkan!',
        //  ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $rules = array(
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'no_tlp_rumah' => 'required|max:13',
            'email' => 'required|email:rfc,dns',
            'description' => 'required'
        );
        $validator = validator()->make(request()->all(), $rules);

        if ($validator->fails()) {
            return [
                'message' => 'Format Input Tidak Sesuai!',
            ];
        } else {
            // store
            $contact = Contact::find($id);

            $nama_depan = $request->nama_depan;
            $nama_belakang = $request->nama_belakang;
            $no_hp = $request->no_hp;
            $no_tlp_rumah = $request->no_tlp_rumah;
            $email = $request->email;
            $description = $request->description;

            $contact->nama_depan = $nama_depan;
            $contact->nama_belakang = $nama_belakang;
            $contact->no_hp = $no_hp;
            $contact->no_tlp_rumah = $no_tlp_rumah;
            $contact->email = $email;
            $contact->description = $description;

            $contact->save();

            return [
                'message' => 'Kontak Berhasil Di Update!',
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact, $id)
    {
        // delete
        $contact = contact::find($id);
        $contact->delete();

        return [
            'message' => 'Kontak Berhasil Dihapus!',
        ];
    }
}
