<?php

namespace App\Http\Controllers\ChatSystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('chat.contacts.index');
    }
}