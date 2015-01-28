<?php namespace Inkwell\Auth
{
	use iMarc\Auth\EntityInterface;

	class AnonymousUser implements EntityInterface
	{
		/**
		 *
		 */
		public function getRoles()
		{
			return ['Anonymous'];
		}


		/**
		 *
		 */
		public function getPermissions()
		{
			return array();
		}
	}
}
