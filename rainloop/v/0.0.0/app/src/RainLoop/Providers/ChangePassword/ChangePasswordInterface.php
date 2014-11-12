<?php

namespace RainLoop\Providers\ChangePassword;

interface ChangePasswordInterface
{
	/**
	 * @param \RainLoop\Model\Account $oAccount
	 *
	 * @return bool
	 */
	public function PasswordChangePossibility($oAccount);

	/**
	 * @param \RainLoop\Model\Account $oAccount
	 * @param string $sPrevPassword
	 * @param string $sNewPassword
	 *
	 * @return bool
	 */
	public function ChangePassword(\RainLoop\Model\Account $oAccount, $sPrevPassword, $sNewPassword);
}
