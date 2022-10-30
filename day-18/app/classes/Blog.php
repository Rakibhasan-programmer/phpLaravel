<?php


namespace App\classes;


class Blog
{
    private $blogs;

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => "Why learn Laravel in 2022?",
                'img' => "php.png",
                'description' => "The open-source tools and high running speed make PHP one of the most preferred languages for creating interactive websites and web applications. Some of the biggest web platforms of today, including Facebook, Yahoo, and Wikipedia, to name a few, use PHP in their end-to-end computing infrastructure."
            ],
            1 => [
                'id' => 2,
                'title' => "Why learn Programming?",
                'img' => "program.png",
                'description' => "Coding is an essential skill in the future because it is an important part of the digital transformation. It is the language of computers and all they do. It has become a basic requirement for acquiring many jobs these days, with many companies looking for Programmer to solve their problems"
            ],
            2 => [
                'id' => 3,
                'title' => "Why learn Flutter?",
                'img' => "flutter.png",
                'description' => "Another reason why flutter is better as it has amazing solutions for developing mobile applications. You do not require to create separate code for iOS and Android, but its cross-platform app development allows you to build only one code to run your application on different platforms."
            ],
            3 => [
                'id' => 4,
                'title' => "Why to learn Next Js for your next project?",
                'img' => "next.png",
                'description' => "Next. js, a frontend JavaScript framework that builds upon React's UI library, aims to reduce JavaScript fatigue by enabling developers to build web applications in a zero-config environment that provides all the tools they need out-of-the-box.Next. js has a good performance thanks to its code splitting and client-side navigation. With Code Splitting, Next. js can do the JavaScript rendering specifically on the page that will load on the browser, not load it all at once"
            ],
            4 => [
                'id' => 5,
                'title' => "Why to learn Next Js for your next project?",
                'img' => "next.png",
                'description' => "Next. js, a frontend JavaScript framework that builds upon React's UI library, aims to reduce JavaScript fatigue by enabling developers to build web applications in a zero-config environment that provides all the tools they need out-of-the-box.Next. js has a good performance thanks to its code splitting and client-side navigation. With Code Splitting, Next. js can do the JavaScript rendering specifically on the page that will load on the browser, not load it all at once"
            ],
            5 => [
                'id' => 6,
                'title' => "Why to learn Next Js for your next project?",
                'img' => "next.png",
                'description' => "Next. js, a frontend JavaScript framework that builds upon React's UI library, aims to reduce JavaScript fatigue by enabling developers to build web applications in a zero-config environment that provides all the tools they need out-of-the-box.Next. js has a good performance thanks to its code splitting and client-side navigation. With Code Splitting, Next. js can do the JavaScript rendering specifically on the page that will load on the browser, not load it all at once"
            ]
        ];
    }

    public function allBlogs()
    {
        return $this->blogs;
    }
    public function getDetails($blogId){
        foreach ($this->blogs as $blog){
            if($blog['id'] == $blogId){
                return $blog;
            }
        }
    }

}