<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function getRsvp() {
        return view('pages.rsvp', compact('rsvp'));
    }

    public function getGuide() {
        return view('pages.guide', compact('guide'));
    }

    public function getCrew() {
        return view('pages.crew', compact('crew'));
    }

    public function getStory() {
        return view('pages.ourstory', compact('ourstory'));
    }

    public function getGallery() {
        return view('pages.gallery', compact('gallery'));
    }

    public function getGift() {
        return view('pages.gift', compact('gift'));
    }

    public function getWedding() {
        return view('pages.wedding', compact('wedding'));
    }
}


