<?php

namespace App\View\Components\SelfBooking;

use Illuminate\View\Component;
use App\Models\ClubClass;

class ClubClass extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $class_id )
    {
        $this->class_id = $class_id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $clubclass = ClubClass::find($this->class_id)
        return view('components.self-booking.club-class',
            [
                'clubclass' => $clubclass,
            ]);
    }
}
