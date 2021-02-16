<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Factory;

class WhoisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Whois.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = $whois->loadDomainInfo("$domain");
        print_r([
        'Domain created' => date("Y-m-d", $info->creationDate),
        'Domain expires' => date("Y-m-d", $info->expirationDate),
        'Domain owner' => $info->owner,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function get()
    {
        // Creating default configured client
    $whois = WhoisController::get()->checkdomain();

// Checking availability
    if ($whois->isDomainAvailable("google.com")) {
    print "Bingo! Domain is available! :)";
    }

            // Supports Unicode (converts to punycode)
    if ($whois->isDomainAvailable("почта.рф")) {
    print "Bingo! Domain is available! :)";
    }


    $response = $whois->lookupDomain("google.com");
        print $response->text;

// Getting parsed domain info
    $info = $whois->loadDomainInfo("google.com");
    print_r([
    'Domain created' => date("Y-m-d", $info->creationDate),
    'Domain expires' => date("Y-m-d", $info->expirationDate),
    'Domain owner' => $info->owner,
    ]);
    }
    public function createwhois()
    {
        return view('Whois.show');
    }
}
