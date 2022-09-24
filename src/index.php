<?php


namespace eyupinann\Quote;
use eyupinann\Quote\Models\Pages;
class Index
{
    public function page($page , $content)
    {
       $page = Pages::create([
            'name' => $page,
            'content' => $content,
        ]);

        return redirect(route('new', $page));


        return view('resources/views/vendor/new');
    }

    public function boot()
    {

    }
}
