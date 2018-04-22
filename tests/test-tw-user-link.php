<?php

class TwUserLinkTest extends WP_UnitTestCase{

    function test_tw_name_in_string(){
        //文字列中のユーザー名変換
        $replace_to_link = replace_tw_user_name_to_link('こんにちは、@WordPressさん。');
        $this->assertEquals('こんにちは、<a href="https://twitter.com/@WordPress">@WordPress</a>さん。',$replace_to_link);
    }

    function test_two_tw_name_in_string(){
        $replace_to_link = replace_tw_user_name_to_link('こんにちは、@WordPressさん。僕は、@wordpressdotcomですよ。');
        $this->assertEquals('こんにちは、<a href="https://twitter.com/@WordPress">@WordPress</a>さん。僕は、<a href="https://twitter.com/@wordpressdotcom">@wordpressdotcom</a>ですよ。',$replace_to_link);
    }

}