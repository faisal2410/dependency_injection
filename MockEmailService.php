<?php

class MockEmailService
{
    public function sendEmail($message)
    {
        echo "Mock Sending email: $message";
    }
}
