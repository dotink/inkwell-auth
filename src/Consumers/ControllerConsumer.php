<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;
	use IW\HTTP;

	trait ControllerConsumer
	{
		/**
		 * Require authorization to move forward
		 *
		 * @access protected
		 * @param string $action The action authoriation required
		 * @param mixed $target The target on which the action authorization is required
		 * @return boolean TRUE if authorization is granted, otherwise will force error response
		 */
		protected function requireAuth($action, $target)
		{
			if (!$this['auth']->is('Anonymous') && $this['auth']->can($action, $target)) {
				return TRUE;
			}

			$this->response->setStatus(HTTP\FORBIDDEN);
			$this->router->demit(NULL);
		}


		/**
		 * Set the authorization manager
		 *
		 * @access public
		 * @param Manager $manager The authorization manager
		 * @return ControllerConsumer The called instance for method chaining
		 */
		public function setAuthManager(Manager $manager)
		{
			$this['auth'] = $manager;

			return $this;
		}
	}
}
