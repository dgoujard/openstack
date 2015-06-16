<?php

namespace OpenStack\Identity\v3\Models;

use OpenStack\Common\Resource\AbstractResource;
use OpenStack\Common\Resource\IsCreatable;
use OpenStack\Common\Resource\IsDeletable;
use OpenStack\Common\Resource\IsListable;
use OpenStack\Common\Resource\IsRetrievable;
use OpenStack\Common\Resource\IsUpdateable;

/**
 * @property \OpenStack\Identity\v3\Api $api
 */
class Domain extends AbstractResource implements IsCreatable, IsListable, IsRetrievable, IsUpdateable, IsDeletable
{
    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var array */
    public $links;

    /** @var bool */
    public $enabled;

    /** @var string */
    public $description;

    protected $resourceKey = 'domain';

    public function create(array $data)
    {
        $response = $this->execute($this->api->postDomains(), $data);
        $this->populateFromResponse($response);
        return $this;
    }

    public function retrieve()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function listUserRoles()
    {

    }

    public function grantUserRole()
    {

    }

    public function checkUserRole()
    {

    }

    public function revokeUserRole()
    {

    }

    public function listGroupRoles()
    {

    }

    public function grantGroupRole()
    {

    }

    public function checkGroupRole()
    {

    }

    public function revokeGroupRole()
    {

    }
} 