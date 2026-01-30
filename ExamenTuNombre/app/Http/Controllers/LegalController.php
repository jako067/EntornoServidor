<?php
/**PHP DOC
 *@author: Diego Rivera
 *@version: 1.0
 *Controlador que nos devuelve tanto la vista cookies como la privacy, las dos únicas del apartado legal
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalController extends Controller
{
    public function cookies(): View
    {
        return view('legal.cookies');
    }
    public function privacy(): View
    {
        return view('legal.privacy');
    }
}
