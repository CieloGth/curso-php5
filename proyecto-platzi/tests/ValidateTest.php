<?php
    use PHPUnit\Framework\TestCase;
    use App\Validate;
    class ValidateTest extends TestCase{
        public function test_email(){
            $email= Validate::email("i@rimorsoft.com");
            $this->assertTrue($email);

            $email= Validate::email("i@@rimorsoft.com");
            $this->assertFalse($email);
        }
        public function test_url(){
            $url= Validate::url("https://platzi.com");
            $this->assertTrue($url);

            $url= Validate::url("platzi.com/");
            $this->assertFalse($url);

            $url= Validate::url("https://platzi.com/p");
            $this->assertFalse($url);

            $url= Validate::url("htt://platzi.com/");
            $this->assertFalse($url);

            $url= Validate::url("http://platz.com/");
            $this->assertFalse($url);
        }
    }
?>