<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth-api');
    }


    public function chapterBaca(){

        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/chapters/1');
        
        $data = json_decode($response->getBody(), true);


        if ($response->status() === 200 && isset($data)) {
            $chapters = $data['chapters'];
            return view('baca', compact('chapters'));
        }
    } 

    public function chapterHitung(){

        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/chapters/2');
        
        $data = json_decode($response->getBody(), true);


        if ($response->status() === 200 && isset($data)) {
            $chapters = $data['chapters'];
            return view('hitung', compact('chapters'));
        }
    } 
    
    public function levelBaca($chapter_name, $id_chapter){

        $token = session('api_token');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/chapters/1/levels/'. $id_chapter);
        
        $data = json_decode($response->getBody(), true);
        
        if ($response->status() === 200 && isset($data)) {
            $levels = $data['levels'];
            return view('baca-level', compact('levels', 'chapter_name'));
        }

        return view('baca-level');
    } 




    public function sesiBaca($level_name, $id_level){

        $token = session('api_token');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/levels/'. $id_level .'/sessions');
        
        $data = json_decode($response->getBody(), true);

        if ($response->status() === 200 && isset($data)) {
            $level_id = $data['level_id'];
            $sessions = $data['sessions'];
            return view('baca-session', compact('sessions', 'level_name', 'level_id'));
        }

        return view('baca-session');
    } 


    public function sesiHitung($level_name, $id_chapter){

        $token = session('api_token');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/chapters/2/levels/'. $id_chapter);
        
        $data = json_decode($response->getBody(), true);

        if ($response->status() === 200 && isset($data)) {
            $id_level = $data['levels'][0]['id'];
           
            $response2 = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/levels/'. $id_level .'/sessions');
            
            $data = json_decode($response2->getBody(), true);
    
            if ($response2->status() === 200 && isset($data)) {
                $level_id = $data['level_id'];
                $sessions = $data['sessions'];
                return view('hitung-session', compact('sessions', 'level_name', 'level_id'));
            }
            
        }

       

        return view('baca-session');
    } 

    public function detailSesi($count, $id_session, $id_level){

        $token = session('api_token');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/levels/' . $id_level . '/sessions'. '/' . $id_session . '/summary');
        
        $data = json_decode($response->getBody(), true);
        

        if ($response->status() === 200 && isset($data)) {
            $session = $data['summary'];
            $count = $count;

            return view('baca-detail', compact('session', 'count'));
        }

        return view('baca-detail');
    }



}
