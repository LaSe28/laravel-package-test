<?php
namespace Lase\Prova\Controllers;

use Illuminate\Http\Request;
use Lase\Prova\Inspire;

class InspirationController
{
    public function test(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
