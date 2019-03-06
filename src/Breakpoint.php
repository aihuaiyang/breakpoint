<?php
namespace Huaiyang\Breakpoint;

use Exception;

use Illuminate\Http\Response;

class Breakpoint extends Exception{

    public function __construct(string $message = "", int $code = 500)
    {
        parent::__construct($message, $code);
    }

    public function render()
    {
        return response()->json(['result' => 0,'message' => $this->message], $this->code);
    }

}