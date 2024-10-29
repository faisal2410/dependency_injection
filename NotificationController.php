<?php
include "EmailService.php";
include "MockEmailService.php";
class NotificationController
{
    private $emailService;

    public function __construct(MockEmailService $emailService)
    {
       $this->emailService=$emailService;
    }

    public function sendNotification($message){
        $this->emailService->sendEmail($message);
    }
}


// $emailService =new EmailService();
// $notificationController= new NotificationController($emailService);
// $notificationController->sendNotification("Hello world");


$mockEmailService =new MockEmailService();
$notificationController= new NotificationController($mockEmailService);
$notificationController->sendNotification("Test Hello");