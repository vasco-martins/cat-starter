<?php
namespace App\Components;

use Cat\Builders\Components\Component;

class HelloMessage extends Component
{
    public function __construct(public string $message) {
    }

    public function render()
    {
        return view('components.hello-message', [ 'message' => $this->message ]);
    }
}