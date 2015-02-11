<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;

	interface ConsumerInterface
	{
		/**
		 * Set the authorization manager
		 *
		 * @access public
		 * @param Manager $manager The authorization manager
		 * @return ConsumerInterface The called instance for method chaining
		 */
		public function setAuthManager(Manager $manager);
	}
}
