<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;

	interface ConsumerInterface
	{
		public function setAuthManager(Manager $manager);
	}
}
