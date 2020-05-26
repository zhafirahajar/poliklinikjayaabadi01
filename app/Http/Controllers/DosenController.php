<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DosenController extends Controller
{
    public function index(){
        return view('coba');
    }

    public function index1(){
        $nama = "Zhafira Hajar";
        $pelajaran = ["ALPRO","KALKULUS","BASIS DATA"];
    	return view('coba',['nama' => $nama , 'matkul' => $pelajaran]);
    }
}