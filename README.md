RBAC/ACLs for inKWell
============

## Related Events

name         | description
-------------|------------------
auth::init   | You can send `auth::init` to refresh the authorization manager for all objects implementing the `Inkwell\Auth\ConsumerInterface`.  You should provide `['auth' => $manager]` in the event data.
