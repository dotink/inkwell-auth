<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;

	trait ContainerConsumer
	{
		/**
		 * Set the authorization manager
		 *
		 * @access public
		 * @param Manager $manager The authorization manager
		 * @return ContainerConsumer The called instance for method chaining
		 */
		public function setAuthManager(Manager $manager)
		{
			$this['auth'] = $manager;

			return $this;
		}
	}
}
