<?php

declare(strict_types=1);

namespace UserLoginService\Tests\Application;

use PHPUnit\Framework\TestCase;
use UserLoginService\Application\UserLoginService;

final class UserLoginServiceTest extends TestCase
{
    /**
     * @test
     */
    public function userIsLoggedIn()
    {
        $userLoginService = new UserLoginService();
        $userLoginService->manualLogin('Abel');
        $userLoginService->manualLogin('Laura');
        $this->assertEquals("user already logged in", $userLoginService->manualLogin('Abel'));

    }
}
