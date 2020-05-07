<?php
    use GuzzleHttp;
    use GuzzleHttp\Subscriber\Oauth\Oauth1;

class signupTests extends \PHPUnit\Framework\TestCase{

    public function testIntUserName()
    {
        $formValidation = new \App\middleware;

        $this->assertEquals($formValidation->checkName("admin123"),true);
    }

    public function testSpaceUserName()
    {
        $formValidation = new \App\middleware;

        $this->assertEquals($formValidation->checkName("  "),false);

    }

    public function testPassword()
    {
        $formValidation = new \App\middleware;

        $this->assertEquals($formValidation->checkPassword("admin"),false);
    }
}
