<?php namespace Inkwell\Auth
{
	use iMarc\Auth\EntityInterface;

	class AnonymousUser implements EntityInterface
	{
		/**
		 * Gets permissions for the anonymous user (should be empty)
		 *
		 * @access public
		 * @return array The permissions table for the anonymous user
		 */
		public function getPermissions()
		{
			return array();
		}


		/**
		 * Gets the roles for the anonymous user (should only contain `'Anonymous'`)
		 *
		 * @access public
		 * @return array An array of roles which the user has
		 */
		public function getRoles()
		{
			return ['Anonymous'];
		}
	}
}
