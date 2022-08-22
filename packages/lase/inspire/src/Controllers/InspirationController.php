<?php
namespace lase\prova\Controllers;

use Illuminate\Http\Request;
use lase\prova\Inspire;

class InspirationController
{
    public function test(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
