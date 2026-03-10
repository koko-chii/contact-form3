<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function index()
    {

    $contacts = Contact::all();

    return view('index', compact('contacts'));
    }
}
