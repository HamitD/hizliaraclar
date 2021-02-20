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

        $domainss = $request->input('domainss');
        try {
            $whois = Factory::get()->createWhois();
            $info = $whois->loadDomainInfo($domainss);
            if (!$info) {
                print "Null if domain available";
                exit;
                
            }
            print $info->domainName ."<br>"." Create at: " . date("d.m.Y H:i:s", $info->creationDate);
            print $info->whois . "<br>"." Expires at: " . date("d.m.Y H:i:s", $info->expirationDate);
            print  $info->domainName."<br>"."&nbsp;"."Kayıt Operatörü:"."&nbsp;". $info->GetNameServers;
        } catch (ConnectionException $e) {
            print "Disconnect or connection timeout";
        } catch (ServerMismatchException $e) {
            print "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            print "Whois server responded with error '{$e->getMessage()}'";
        }
 




    }

}
