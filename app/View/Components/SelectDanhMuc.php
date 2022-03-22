<?php

namespace App\View\Components;

use App\Models\Banner;
use App\Models\DanhMuc;
use Illuminate\View\Component;

class SelectDanhMuc extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = DanhMuc::all();
        return view('components.select-danh-muc')->with('danhmuc',$data);
    }
}
