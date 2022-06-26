<?php

namespace App\Http\Controllers;

use App\Mail\MessageSent;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsStoreRequest;

class ContactUsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
	 */
	public function index()
	{
		$contacts = ContactUs::latest()->get();
		return view('contact.index', compact('contacts'));
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
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
	 */
	public function store(ContactUsStoreRequest $request)
	{
		$contact = new ContactUs();

		$contact->name = $request->get('name');
		$contact->email = $request->get('email');
		$contact->message = $request->get('message');
		$contact->save();
		Mail::to('solutiongate.sg@gmail.com')->send(new MessageSent($contact));
		return redirect()->back()->with('message', 'Thanks for Connecting with us.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Models\ContactUs $contactUs
	 * @return \Illuminate\Http\Response
	 */
	public function show(ContactUs $contactUs)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Models\ContactUs $contactUs
	 * @return \Illuminate\Http\Response
	 */
	public function edit(ContactUs $contactUs)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\ContactUs $contactUs
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, ContactUs $contactUs)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $contact
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
	 */
	public function destroy($contact)
	{
		ContactUs::findOrFail($contact)->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}
}
