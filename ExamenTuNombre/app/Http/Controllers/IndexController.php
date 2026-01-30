<?php
/**PHP DOC
 *@author: Diego Rivera
 *@version: 1.0
 *Controllador única petición para nuestra vista index
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('index');
    }
}
