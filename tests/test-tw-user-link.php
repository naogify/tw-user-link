<?php

class TwUserLinkTest extends WP_UnitTestCase{

    function test_tw_name_in_string(){
        $replace_to_link = replace_tw_user_name_to_link('こんにちは、@WordPressさん。');
        $this->assertEquals('こんにちは、<a href="https://twitter.com/@WordPress">@WordPress</a>さん。',$replace_to_link);
    }

    function test_multiple_tw_name_in_string(){
        $replace_to_link = replace_tw_user_name_to_link('こんにちは、@WordPressさん。僕は、@wordpressdotcomですよ。@Automatticさんに作られています。');
        $this->assertEquals('こんにちは、<a href="https://twitter.com/@WordPress">@WordPress</a>さん。僕は、<a href="https://twitter.com/@wordpressdotcom">@wordpressdotcom</a>ですよ。<a href="https://twitter.com/@Automattic">@Automattic</a>さんに作られています。',$replace_to_link);
    }

    function test_prohibited_character_in_tw_name(){
        $replace_to_link = replace_tw_user_name_to_link('こんにちは、@ワードプレスさん。僕は、@"#$%&^-|?+です。');
        $this->assertEquals('こんにちは、@ワードプレスさん。僕は、@"#$%&^-|?+です。',$replace_to_link);
    }

}