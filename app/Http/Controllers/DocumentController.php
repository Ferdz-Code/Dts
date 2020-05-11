<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $document ['documents']=Document::OrderBy('id','asc')->paginate(10);

        return view('document.index',$document);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = array
        (
            'classification'   => $request->classification,
            'subject'          => $request->subject,
            'document_type'    => $request->document_type,
            'sender_name'      => $request->sender_name,
            'sender_profile'   => $request->sender_profile,
            'mode_of_delivery' => $request->mode_of_delivery,
            'addressee'        => $request->addressee,
            'office_name'      => $request->office_name,
            'date_received'    => $request->date_received,
            'time_received'    => $request->time_received
        );

        Document::create($document);

        return redirect()->route('document.index')->with('success','Document Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $document = array
        (
            'classification'   => $request->classification,
            'subject'          => $request->subject,
            'document_type'    => $request->document_type,
            'sender_name'      => $request->sender_name,
            'sender_profile'   => $request->sender_profile,
            'mode_of_delivery' => $request->mode_of_delivery,
            'addressee'        => $request->addressee,
            'office_name'      => $request->office_name,
            'date_received'    => $request->date_received,
            'time_received'    => $request->time_received
        );

        Document::findOrfail($request->document_id)->update($document);

        return redirect()->route('document.index')->with('success','Document Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $document)
    {
        $delete = $document->all();

        $deletedocument = Document::findOrfail($document->document_id);
        $deletedocument->delete();
        return redirect()->route('document.index')->with('success','Document Deleted Successfully!');
    }
}
