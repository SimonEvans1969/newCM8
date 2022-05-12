<?php

namespace App\View\Components\SelfBooking;

use Illuminate\View\Component;
use App\Models\ClubClass;
use App\Models\ClassAttribute;

class ClassPanel extends Component
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
        $clubclass = ClubClass::find($this->class_id);

        $attributes = new stdClass();
        foreach( ClassAttribute::where('clubclass_id','=',$this->class_id) as $class_attribute ) {
            $attributes->{$class_attribute->attribute} = $class_attribute->value;
        }

        return view('components.self-booking.club-class',
            [
                'clubclass' => $clubclass,
                'attributes' => $attributes,
            ]);
    }
}
