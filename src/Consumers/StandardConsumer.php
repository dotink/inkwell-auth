<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;

	trait ContainerConsumer
	{
		/**
		 * The authorization manager
		 *
		 * @access protected
		 * @var Manager
		 */
		protected $auth = NULL;


		/**
		 * Set the authorization manager
		 *
		 * @access public
		 * @param Manager $manager The authorization manager
		 * @return StandardConsumer The called instance for method chaining
		 */
		public function setAuthManager(Manager $manager)
		{
			$this->auth = $manager;

			return $this;
		}
	}
}
