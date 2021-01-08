<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use DB;

class gamesController extends Controller
{

    public function showHome(){
        $homeNews = DB::select('select * from news ORDER BY WID DESC LIMIT 3;');
        $homeGames= DB::select('select * from games ORDER BY GID DESC LIMIT 3;');
        return view('Home', compact('homeNews', 'homeGames'));
    }


    public function showNews()
    {
        $news = DB::select('select * from news');
        return view('News', compact('news'));
    }



    public function showNewsDetails($title)
    {
        $news = DB::select('select * from news where Title =?', [$title]);
        return view('newsDetails', compact('news'));
    }


    public function showGame($gameName)
    {
        $game    =  DB::select('select * from games where Gname = ?', [$gameName]);
        return view('gameTemplate', compact('game'));
    }


    public function showGamesList()
    {
        $game = DB::select('select Gname, Cover from games');
        return view('gameslist', compact('game'));
    }

    public function showAbout()
    {
        return view('About');
    }

    public function showContactUs()
    {

        return view('ContactUs');
    }

    public function showGallery()
    {
        $gallery = DB::select('select * from gallery');
        return view('PictureGallery', compact('gallery'));
    }

    public function showReleaseDates()
    {
        $releaseDates = DB::select('select * from releaseDates');
        return view('GamesReleaseDates', compact('releaseDates'));
    }

    public function showFeedback()
    {

        return view('Feedback');
    }

    public function store(Request $request)
    {
        $feedback = new feedback();

        $feedback->FirstName = request('firstname');
        $feedback->LastName = request('lastname');
        $feedback->Email = request('email');
        $feedback->Age = request('age');
        $feedback->Gender = request('gender');
        $feedback->Phone = request('phone');
        $feedback->City = request('city');
        $feedback->Platform = request('platform');
        $feedback->UserID = request('id');
        $feedback->content = request('feedback');
        $feedback->LikedGames = request('sections');
        $feedback->save();


        return view('FeedbackSent');
    }
}
