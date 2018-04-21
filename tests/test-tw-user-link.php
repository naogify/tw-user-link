<?php

class TwUserLinkTest extends WP_UnitTestCase{

    function test_replace_tw_user_name_to_link(){
        $replace_to_link = replace_tw_user_name_to_link('@WordPress');
        $this->assertEquals('<a href="https://twitter.com/@WordPress">@WordPress</a>',$replace_to_link);
    }

}