<?php


namespace quote\Page;

class Index
{
    public function page($page = 'contact us', $content = ['contact us','smks'] )
    {
        return response()->json([
            '‘quotes’' => [
                $page =>
                    [$content]
            ]
        ]);
    }
}
