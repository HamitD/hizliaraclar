<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exler\Whois\Whois;
use Iodev\Whois\Factory;

class WhoisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
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
   
    public function checkDomain(Request $request)
    {

        $whois = Factory::get()->createWhois($domainss);
        
        // Checking availability
        if ($whois->isDomainAvailable($domainss)) {
            print "Bingo! Domain is available! :)";
        }
        
        // Supports Unicode (converts to punycode)
        if ($whois->isDomainAvailable($domainss)) {
            print "Bingo! Domain is available! :)";
        }
        
        // Getting raw-text lookup
        $response = $whois->lookupDomain($domainss);
        print $response->text;
        
        // Getting parsed domain info
        $info = $whois->loadDomainInfo($domainss);
        print_r([
            'Domain created' => date("Y-m-d", $info->creationDate),
            'Domain expires' => date("Y-m-d", $info->expirationDate),
            'Domain owner' => $info->owner,
        ]);


    }
    public function seedetails()
    
    {
        
    }
}
