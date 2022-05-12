<?php

namespace App\View\Components\SelfBooking;

use Illuminate\View\Component;
use App\Models\ClubClass;
use App\Models\ClassAttribute;

class ClassPanel extends Component
{
    public $classId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $classId )
    {
        $this->classId = $classId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $clubclass = ClubClass::find($this->classId);

        $class_attributes = new \stdClass();
        $class_attributes_coll = ClassAttribute::where('clubclass_id','=',$this->classId)->get();

        foreach( $class_attributes_coll as $class_attribute ) {
            $class_attributes->{$class_attribute->attribute} = $class_attribute->value;
        }

        return view('components.self-booking.class-panel',
            [
                'clubclass' => $clubclass,
                'classAttributes' => $class_attributes,
            ]);
    }
}
