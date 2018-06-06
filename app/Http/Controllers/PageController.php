<?php
namespace App\Http\Controllers;
use Session;
use Hash;
use Auth;
use App\User;
use App\bacsi;
use App\slide;
use App\phongkham;

use Illuminate\http\Requeest;
class PageController extends Controller
{
	public function getIndex()
	{
		$doctor=bacsi::all();
		$slide=slide::all();
		return view('page.trangchu',compact('doctor','slide'));
	}
	public function getLienhe()
	{	
		$id = 1;
		// $bacsi=bacsi::where('MaBacSi',1)->get();
		$bacsi=bacsi::find(1);
		$phongkham=phongkham::all();
		return view('page.lienhe',compact('phongkham'));
	}
	public function postLogout()
	{
		Auth::logout();
		redirect()->route('trang-chu');
	}
	public function getLoaidichvu()
	{


	}
	public function test(){

	}
}