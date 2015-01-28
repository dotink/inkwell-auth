<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;

	trait ContainerConsumer
	{
		public function setAuthManager(Manager $manager)
		{
			$this['auth'] = $manager;
		}
	}
}
