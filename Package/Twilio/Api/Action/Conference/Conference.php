<?php
namespace Twilio\Api\Action\Conference;

use Twilio\Api\Resource\Instance;

/**
 * Twilio conference instance
 *
 * @package Library
 * @subpackage Twilio\Api\Action\Conference
 * @author Aleksey Korzun <al.ko@webfoundation.net>
 */
class Conference extends Instance
{
	/**
	 * Initializer
	 *
	 * @return void
	 */
	protected function init()
	{
		$this->setupActions('participants');
	}
}

