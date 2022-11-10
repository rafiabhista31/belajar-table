<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    //
    public function index()
    {
        return view('index') ;
    }

    public function form()
    {
        return '<h1>Buat Account Baru</h1>
            <h4>Sign Up Form</h4>
            <form action="welocome.html" method="post">
                <label for="first-name">First Name : </label>
                <br>
                <input type="text" name="first-name" id="first-name" class="name" placeholder="dadhag">
                <br>
                <label for="last-name">Last Name :</label>
                <br>
                <input type="text" name="last-name" id="last-name">
                <br>
                <label for="gender">Gender :</label>
                <br>
                <input type="radio" name="gender" id="">Male
                <br> 
                <input type="radio" name="gender" id="">Female
                <br>
                <label for="Nationatity">Nationality</label>
                <br>
                <select name="Nationatity" id="Nationatity">
                    <option value="wna">WNI</option>
                    <option value="wni">WNA</option>
                </select>
                <br>
                <label for="language">Bahasa</label>
                <br>
                <input type="checkbox" name="language" id="">Bahasa Indonesia
                <br>
                <input type="checkbox" name="language" id="">English
                <br>
                <input type="checkbox" name="language" id="">Other
                <br>
                <label for="bio">Bio</label><br>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" value="Sign Up">
        
            </form>';
    }
}
