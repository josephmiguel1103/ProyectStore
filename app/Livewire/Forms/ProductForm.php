<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Rule('required')]
    public $name,$description,$price,$stock,$size_id,$category_id;
}
