<?php


namespace eyupinann\Quote;
use eyupinann\Quote\Models\Pages;
class Index
{
    public function page($page , $content)
    {
       Pages::create([
            'name' => $page,
            'content' => $content,
        ]);

        $page = Pages::where('name',$page)->first();

        return view('vendor.new.new',compact('page'));

    }
}
