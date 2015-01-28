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
			if (!$this['auth']->entity->is('Anonymous')) {
				if ($this['auth']->entity->can($action, $target)) {
					return TRUE;
				}
			}

			$this->response->setStatus(HTTP\NOT_AUTHORIZED);
			$this->response->demit(NULL);
		}
	}
}
