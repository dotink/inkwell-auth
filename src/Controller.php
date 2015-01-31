<?php namespace Inkwell\Auth
{
	use iMarc\Auth\Manager;
	use IW\HTTP;

	trait Controller
	{
		/**
		 *
		 */
		public function setAuthManager(Manager $manager)
		{
			$this['auth'] = $manager;
		}


		/**
		 *
		 */
		public function requireAuth($action, $target)
		{
			if (!$this['auth']->is('Anonymous')) {
				if ($this['auth']->can($action, $target)) {
					return TRUE;
				}
			}

			$this->response->setStatus(HTTP\NOT_AUTHORIZED);
			$this->router->demit(NULL);
		}
	}
}
